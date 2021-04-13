<?php
$cdnUrl = Yii::$app->params['frontend'];

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<style>
    .sidenav__profile-avatar {
        background-image: url("<?= $cdnUrl ?>/uploads/avatar/<?= $userModel['avatar'] ?>");
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, .2);
        height: 64px;
        width: 64px;
        margin: 0 15px;
    }
</style>
<div class="row">
    <div class="col-12 col-md-3 col-lg-3 col-sm-3 col-xl-3">
        <aside class="sidenav">
            <div class="sidenav__profile">
                <div class="sidenav__profile-avatar"></div>
                <div class="sidenav__profile-title text-light"><?= $userModel['name'] ?></div>
            </div>
            <div class="row row--align-v-center row--align-h-center">
                <ul class="navList">
                    <li class="navList__heading">Tài khoản<i class="far fa-file-alt"></i></li>
                    <li>
                        <div class="navList__subheading row row--align-v-center">
                            <span class="navList__subheading-icon"><i class="fas fa-users"></i></span>
                            <span class="navList__subheading-title">Hồ sơ của tôi</span>
                        </div>
                        <ul class="subList subList--hidden">
                            <li class="subList__item"><a href="profile" class="">Hồ sơ</a></li>
                            <li class="subList__item"><a href="change-password" class="">Đổi mật khẩu</a></li>
                            <li class="subList__item"><a href="address" class="">Địa chỉ</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="navList__subheading row row--align-v-center">
                            <span class="navList__subheading-icon"><i class="fas fa-briefcase-medical"></i></span>
                            <span class="navList__subheading-title">insurance</span>
                        </div>
                        <ul class="subList subList--hidden">
                            <li class="subList__item"><a href="profile" class="">Hồ sơ</a></li>
                            <li class="subList__item"><a href="change-password" class="">Đổi mật khẩu</a></li>
                            <li class="subList__item"><a href="address" class="">Địa chỉ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="col-12 col-md-9 col-lg-9 col-sm-9 col-xl-9 border">
        <div class="text-light px-3 pt-3 color-heading row">
            <div class="col-12 col-md-10 col-lg-10 col-sm-10 col-xl-10">
                <h4>Địa chỉ của tôi</h4>
                <p>Địa chỉ để kim khanh liên hệ với bạn</p>
            </div>
            <div class="col-12 col-md-2 col-lg-2 col-sm-2 col-xl-2">
                <button class="btn btn-danger">Thêm địa chỉ</button>
            </div>
        </div>
        <div class=" px-3 pt-3 pb-1">
            <p>bạn chưa có địa chỉ!!</p>
        </div>
    </div>
</div>

<!--sidenav-->
<script>
    /* Scripts for css grid dashboard */
    $(document).ready(() => {
        addResizeListeners();
        setSidenavListeners();
        setUserDropdownListener();
        renderChart();
        setMenuClickListener();
        setSidenavCloseListener();
    });

    // Set constants and grab needed elements
    const sidenavEl = $('.sidenav');
    const gridEl = $('.grid');
    const SIDENAV_ACTIVE_CLASS = 'sidenav--active';
    const GRID_NO_SCROLL_CLASS = 'grid--noscroll';

    function toggleClass(el, className) {
        if (el.hasClass(className)) {
            el.removeClass(className);
        } else {
            el.addClass(className);
        }
    }

    // User avatar dropdown functionality
    function setUserDropdownListener() {
        const userAvatar = $('.header__avatar');

        userAvatar.on('click', function () {
            const dropdown = $(this).children('.dropdown');
            toggleClass(dropdown, 'dropdown--active');
        });
    }

    // Sidenav list sliding functionality
    function setSidenavListeners() {
        const subHeadings = $('.navList__subheading');
        console.log('subHeadings: ', subHeadings);
        const SUBHEADING_OPEN_CLASS = 'navList__subheading--open';
        const SUBLIST_HIDDEN_CLASS = 'subList--hidden';

        subHeadings.each((i, subHeadingEl) => {
            $(subHeadingEl).on('click', () => {
                const subListEl = $(subHeadingEl).siblings();

                // Add/remove selected styles to list category heading
                if (subHeadingEl) {
                    toggleClass($(subHeadingEl), SUBHEADING_OPEN_CLASS);
                }

                // Reveal/hide the sublist
                if (subListEl && subListEl.length === 1) {
                    toggleClass($(subListEl), SUBLIST_HIDDEN_CLASS);
                }
            });
        });
    }

    // If user opens the menu and then expands the viewport from mobile size without closing the menu,
    // make sure scrolling is enabled again and that sidenav active class is removed
    function addResizeListeners() {
        $(window).resize(function () {
            const width = window.innerWidth;
            console.log('width: ', width);

            if (width > 750) {
                sidenavEl.removeClass(SIDENAV_ACTIVE_CLASS);
                gridEl.removeClass(GRID_NO_SCROLL_CLASS);
            }
        });
    }
</script>
<!--sidenav-->
