
import { myFetchPost } from "../functions/api.js";
import { wait } from "../functions/promise.js";
import { ImageShowPicturesManager } from "./CarouselPicturesManager.js";
import { CloseHandler } from "./CloseHandler.js";

export class ImageShow {

    /**Event */
    static showOpen = 'showopen';

    /** @type {HTMLElement} */
    #elt;

    /** @type {HTMLElement} cakes-list */
    #container;
    
    /** @type {HTMLElement} */
    #show;

    /** @type {number} */
    #scroll;

    /** @type {CloseHandler} */
    #closeHandler;

    constructor(elt) {
        this.#elt = elt;
        this.#container = this.#elt.parentElement;

        this.#scroll = this.#calcScroll();
        window.scroll(0, this.#scroll);
        document.body.classList.add('frozen');
        this.#activeBodyDark();
        this.#startLoader();
        this.#openShow();
    }

    async #openShow() {
        this.#show = document.querySelector('#image-show-template').content.cloneNode(true).firstElementChild;
        const cakeData = await myFetchPost(this.#container.dataset.entrypoint, this.#elt.dataset.id);
        const hasSecondaryPictures = this.#hydrateShow(cakeData);

        document.body.append(this.#show);
        this.#elt.dispatchEvent(new CustomEvent(ImageShow.showOpen, {bubbles: true}));

        await wait(300);  //pour que le scroll soit terminé au moment de calculer le positionnement
        this.#show.style.top = this.#calcShowTop() + 'px';
        this.#stopLoader();
        this.#show.classList.add('visible')   // pour la transition
        this.callClose = e => this.#close();
        window.addEventListener('resize', this.callClose);
        this.#waitClose();
        new ImageShowPicturesManager(this.#show, '.image-show-carousel', hasSecondaryPictures);
    }

    async #startLoader() {
        const loader = document.querySelector('.body-dark-loader');
        await wait(500);
        loader.style.top = (this.#calcShowTop() - 25) + 'px';
        loader.classList.add('loading');
    }

    #stopLoader() {
        document.querySelector('.body-dark-loader').classList.remove('loading');
    }

    async #waitClose() {
        this.#closeHandler = new CloseHandler(this.#show, this.#show.querySelector('.image-show-closer'));
        await this.#closeHandler.start();
        this.#close();
    }

    #close() {
        window.removeEventListener('resize', this.callClose);
        document.querySelector('.body-dark').classList.remove('active');
        this.#show.remove();
        document.body.classList.remove('frozen');
        this.#closeHandler.stop();
    }

    #calcScroll() {
        const eltY = this.#elt.getBoundingClientRect().top + window.scrollY;
        const eltCenterY = eltY + (this.#elt.getBoundingClientRect().height / 2);
        return eltCenterY - (window.innerHeight / 2);
    }
    #calcShowTop() {
        return (window.scrollY + (50/100 * window.innerHeight));
    }
    #activeBodyDark() {
        const body_dark = document.querySelector('.body-dark');
        body_dark.style.height = window.innerHeight * 2 + this.#scroll + 'px';
        body_dark.classList.add('active');
    }

    /**
     * 
     * @param {array} cakeData 
     */
    #hydrateShow(cakeData) {
        if(cakeData.title) {
            this.#show.querySelector('.image-show-title').innerText = cakeData.title;
        } else {
            this.#show.querySelector('.image-show-title').remove();
        }
        if(cakeData.description) {
            this.#show.querySelector('.image-show-description').innerText = cakeData.description;
        } else {
            this.#show.querySelector('.image-show-description').remove();
        }
        const carousel = this.#show.querySelector('.image-show-carousel');
        const smallList = this.#show.querySelector('.small-list');

        //ajout de la first picture
        carousel.append(this.#getCarouselItem(cakeData.firstPicture, 0));
        // ajout des secondary pictures
        if(cakeData.secondaryPictures) {
            smallList.append(this.#getSmallImg(cakeData.firstPicture, 0));
            let i = 0;
            for(const picture of cakeData.secondaryPictures) {
                i++;
                carousel.append(this.#getCarouselItem(picture, i));
                smallList.append(this.#getSmallImg(picture, i));
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param {string} pictureUrl
     * @param {number} id
     * @returns {HTMLElement}
     */
    #getCarouselItem(pictureUrl, id) {
        const item = document.querySelector('#image-show-carousel-item-template').content.cloneNode(true).firstElementChild;
        item.querySelector('.image-show-carousel-img').style.background = 'url('+pictureUrl+') center center / cover no-repeat';
        item.setAttribute('href', pictureUrl);
        item.dataset.id = id;
        return item;
    }

    /**
     * 
     * @param {string} pictureUrl
     * @param {number} id
     * @returns {HTMLElement}
     */
    #getSmallImg(pictureUrl, id) {
        const smallImg = document.querySelector('#small-img-template').content.cloneNode(true).firstElementChild;
        smallImg.style.background = 'url('+pictureUrl+') center center / cover no-repeat';
        smallImg.dataset.id = id;
        if(id === 0) {
            smallImg.classList.add('active');
        }
        return smallImg;
    }


    

}