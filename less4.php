<!--task2-->
<style>
    .gallery {
        width: 80%;
        height: 300px;
        margin: 10% auto;
    }
    .gallery__items {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .gallery__item {
        width: 300px;
        height: 300px;
        margin: 0 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid darkgrey;
        border-radius: 10px;
    }
    .gallery__img {
        max-width: 100%;
        height: auto;
    }
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
    }
    .modal__content {
        position: relative;
        width: 80%;
        height: 80%;
        margin: 50px auto;
        background: #fff;
        border-radius: 10px;
    }
    .modal__close {
        position: absolute;
        top: 20px;
        right: 20px;
        border: none;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
    }
    .modal__img {
        position: relative;
        display: block;
        width: 80%;
        height: 80%;
        margin: 0 auto;
        padding: 10px;
    }
</style>
<?php
function delete($images) {
    $trash =  [];
    foreach ($images as $image) {
        if ($images[$image] !="/." && $images[$image] !="/..") {
            $trash[] = $images[$image];
        }
        return $trash;
    }
}
//Вот тут очень нужен ваш Коментарий вывел изначально все файлы, там естественно есть лишние корневые написал маленькую
//функцию но почему-то перестает вообще выводиться массив, может быть вы обьясняли в уроке но к сожалению я не успел
//посмотреть
?>
<div class="gallery">
    <div class="gallery__items">
        <?php
        $dir = 'img';
        $images = scandir($dir);
        //$images = delete($images);
        for ($i = 2; $i< count($images); $i++) { ?>
            <a href="<?=$dir."/".$images[$i]?>" target="_blank" class="gallery__item">
                <img src="<?=$dir."/".$images[$i]?>" data-big="<?=$dir."/".$images[$i]?>" alt="" class="gallery__img">
            </a>
        <?php }?>
    </div>
</div>

<script>
    'use strict';
    class Modal {
        constructor(classBG, classModal, classModalImg, link, gallery) {
            this.classBG = classBG;
            this.classModal = classModal;
            this.classModalImg = classModalImg;
            this.link = link;
            this.gallery = gallery;
        }

        _createModal () {
            const modalBG = document.createElement('DIV');
            modalBG.classList.add(this.classBG);
            const modal = document.createElement('DIV');
            modal.classList.add(this.classModal);
            const modalImg = new Image();
            modalImg.classList.add(this.classModalImg);
            modal.appendChild(modalImg);
            modal.appendChild(this._createClose('modal__close'));
            modalBG.appendChild(modal);

            return modalBG;
        }
        _createClose(btnClass) {
            const close = document.createElement('BUTTON');
            close.classList.add(btnClass);
            close.innerHTML = '\t&#215;';
            close.addEventListener('click', () => {
                document.querySelector('.modal').remove();
            });
            return close;
        }

        _callModal(event) {
            const clickImg = event.target;
            if (clickImg.tagName !== 'IMG') {
                return;
            }
            document.querySelector(this.gallery).appendChild(this._createModal());
            console.log(event);
            this._openModalImg(clickImg.dataset.big);
        }

        _click() {
            document.querySelector(this.gallery).addEventListener('click', event => this._callModal(event));
        }

        _openModalImg(src) {

            document.querySelector(`.${this.classModalImg}`).src = src;
            console.log(document.querySelector(this.classModalImg));
        }
    }

    window.onload = () => {
        const modal = new Modal('modal', 'modal__content', 'modal__img', 'link', '.gallery');
        modal._click();
    }
</script>
