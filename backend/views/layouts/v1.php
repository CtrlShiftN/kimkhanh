<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\assets\AppAsset;

AppAsset::register($this);
$cdnUrl = Yii::$app->params['backend'];

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <?= $this->render('_head') ?>
        <style>
            .header__avatar, .sidenav__profile-avatar {
                background-image: url('<?= Yii::$app->user->getIdentity()->avatar ?>');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <div class="grid">
            <header class="header">
                <i class="fas fa-bars header__menu"></i>
                <div class="header__search">
                    <input class="header__input" placeholder="Search..."/>
                </div>
                <div class="header__avatar">
                    <div class="dropdown">
                        <ul class="dropdown__list">
                            <li class="dropdown__list-item">
                                <span class="dropdown__icon"><i class="far fa-user"></i></span>
                                <span class="dropdown__title">Hồ sơ</span>
                            </li>
                            <li class="dropdown__list-item">
                                <span class="dropdown__icon"><i class="fas fa-sign-out-alt"></i></span>
                                <span class="dropdown__title">Đăng xuất</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <aside class="sidenav">
                <div class="sidenav__brand">
                    <i class="fas fa-feather-alt sidenav__brand-icon"></i>
                    <a class="sidenav__brand-link text-decoration-none text-light" href="<?= $cdnUrl ?>">Kim Khánh</a>
                    <i class="fas fa-times sidenav__brand-close"></i>
                </div>
                <div class="sidenav__profile">
                    <div class="sidenav__profile-avatar"></div>
                    <div class="sidenav__profile-title text-light"><?= Yii::$app->user->getIdentity()->name ?></div>
                </div>
                <div class="row row--align-v-center row--align-h-center">
                    <ul class="navList">
                        <li class="navList__heading">documents<i class="far fa-file-alt"></i></li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-briefcase-medical"></i></span>
                                <span class="navList__subheading-title">insurance</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">medical</li>
                                <li class="subList__item">vision</li>
                                <li class="subList__item">dental</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-plane-departure"></i></span>
                                <span class="navList__subheading-title">travel</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">domestic</li>
                                <li class="subList__item">foreign</li>
                                <li class="subList__item">misc</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="far fa-angry"></i></span>
                                <span class="navList__subheading-title">taxes</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">current</li>
                                <li class="subList__item">archives</li>
                            </ul>
                        </li>

                        <li class="navList__heading">messages<i class="far fa-envelope"></i></li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-envelope"></i></span>
                                <span class="navList__subheading-title">inbox</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">primary</li>
                                <li class="subList__item">social</li>
                                <li class="subList__item">promotional</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-eye"></i></span>
                                <span class="navList__subheading-title">unread</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">primary</li>
                                <li class="subList__item">social</li>
                                <li class="subList__item">promotional</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-book-open"></i></span>
                                <span class="navList__subheading-title">archives</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">primary</li>
                                <li class="subList__item">social</li>
                                <li class="subList__item">promotional</li>
                            </ul>
                        </li>

                        <li class="navList__heading">photo album<i class="far fa-image"></i></li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-mountain"></i></span>
                                <span class="navList__subheading-title">vacation</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">cambodia</li>
                                <li class="subList__item">new york</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-wine-glass-alt"></i></span>
                                <span class="navList__subheading-title">anniversary</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">dive trip</li>
                                <li class="subList__item">hikathon</li>
                                <li class="subList__item">buffalo river</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-graduation-cap"></i></span>
                                <span class="navList__subheading-title">university</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">wild horse saloon</li>
                                <li class="subList__item">service corps</li>
                                <li class="subList__item">graduation</li>
                                <li class="subList__item">internships</li>
                            </ul>
                        </li>

                        <li class="navList__heading">statistics<i class="fas fa-chart-bar"></i></li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-credit-card"></i></span>
                                <span class="navList__subheading-title">finances</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">mortgage</li>
                                <li class="subList__item">investments</li>
                                <li class="subList__item">spend log</li>
                                <li class="subList__item">owed</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-phone"></i></span>
                                <span class="navList__subheading-title">call stats</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">last month</li>
                                <li class="subList__item">bi-weekly</li>
                                <li class="subList__item">yesterday</li>
                                <li class="subList__item">today</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-plane"></i></span>
                                <span class="navList__subheading-title">trip logs</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">amsterdam</li>
                                <li class="subList__item">buenos aires</li>
                                <li class="subList__item">cambodia</li>
                                <li class="subList__item">greenland</li>
                            </ul>
                        </li>

                        <li class="navList__heading">Events<i class="fas fa-calendar-alt"></i></li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-wine-glass-alt"></i></span>
                                <span class="navList__subheading-title">weddings</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">past</li>
                                <li class="subList__item">present</li>
                                <li class="subList__item">future</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-school"></i></span>
                                <span class="navList__subheading-title">playdates</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">weirdos</li>
                                <li class="subList__item">smarties</li>
                                <li class="subList__item">nerds</li>
                            </ul>
                        </li>
                        <li>
                            <div class="navList__subheading row row--align-v-center">
                                <span class="navList__subheading-icon"><i class="fas fa-users"></i></span>
                                <span class="navList__subheading-title">networking</span>
                            </div>
                            <ul class="subList subList--hidden">
                                <li class="subList__item">tech</li>
                                <li class="subList__item">automotive</li>
                                <li class="subList__item">UX research</li>
                                <li class="subList__item">development</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <main class="main">
                <div class="main-header">
                    <div class="main-header__intro-wrapper">
                        <div class="main-header__welcome">
                            <div class="main-header__welcome-title text-light">Welcome, <strong>Matthew</strong></div>
                            <div class="main-header__welcome-subtitle text-light">How are you today?</div>
                        </div>
                        <div class="quickview">
                            <div class="quickview__item">
                                <div class="quickview__item-total">41</div>
                                <div class="quickview__item-description">
                                    <i class="far fa-calendar-alt"></i>
                                    <span class="text-light">Events</span>
                                </div>
                            </div>
                            <div class="quickview__item">
                                <div class="quickview__item-total">64</div>
                                <div class="quickview__item-description">
                                    <i class="far fa-comment"></i>
                                    <span class="text-light">Messages</span>
                                </div>
                            </div>
                            <div class="quickview__item">
                                <div class="quickview__item-total">27&deg;</div>
                                <div class="quickview__item-description">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span class="text-light">Austin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-overview">
                    <div class="overviewCard">
                        <div class="overviewCard-icon overviewCard-icon--document">
                            <i class="far fa-file-alt"></i>
                        </div>
                        <div class="overviewCard-description">
                            <h3 class="overviewCard-title text-light">New <strong>Document</strong></h3>
                            <p class="overviewCard-subtitle">Europe Trip</p>
                        </div>
                    </div>
                    <div class="overviewCard">
                        <div class="overviewCard-icon overviewCard-icon--calendar">
                            <i class="far fa-calendar-check"></i>
                        </div>
                        <div class="overviewCard-description">
                            <h3 class="overviewCard-title text-light">Upcoming <strong>Event</strong></h3>
                            <p class="overviewCard-subtitle">Chili Cookoff</p>
                        </div>
                    </div>
                    <div class="overviewCard">
                        <div class="overviewCard-icon overviewCard-icon--mail">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="overviewCard-description">
                            <h3 class="overviewCard-title text-light">Recent <strong>Emails</strong></h3>
                            <p class="overviewCard-subtitle">+10</p>
                        </div>
                    </div>
                    <div class="overviewCard">
                        <div class="overviewCard-icon overviewCard-icon--photo">
                            <i class="far fa-file-image"></i>
                        </div>
                        <div class="overviewCard-description">
                            <h3 class="overviewCard-title text-light">New <strong>Album</strong></h3>
                            <p class="overviewCard-subtitle">House Concert</p>
                        </div>
                    </div>
                </div> <!-- /.main__overview -->
                <div class="container">
                    <?= $content ?>
                </div>
            </main>
        </div>
    </div>
    <footer class="footer bg-danger">
        <section class="kh-footer">
        </section>
        <section class="kh-copyright">
        </section>
    </footer>
    <script type="text/javascript" src="<?= $cdnUrl ?>/js/v1.js"></script>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>