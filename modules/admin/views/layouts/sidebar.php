<?php
/**
 * Created by PhpStorm.
 * User: Farhodjon
 * Date: 10.03.2018
 * Time: 15:17
 */

use app\modules\admin\widgets\Menu;
use yii\helpers\Url;

?>
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <?php
            try {
                echo Menu::widget([
                    'options' => [ 'id' => 'sidebarnav' ],
                    'submenuTemplate' => "\n<ul aria-expanded='false' class='collapse'>\n{items}\n</ul>\n",
                    'badgeClass' => 'label label-rouded label-primary pull-right',
                    'activateParents' => true,
                    'items' => [
                        [
                            'label' => '',
                            'options' => [ 'class' => 'nav-devider' ]
                        ],
                        [
                            'label' => 'Home',
                            'options' => [ 'class' => 'nav-label' ]
                        ],
                        [
                            'label' => 'Dashboard',
                            'url' => ['default/index'],
                            'icon' => '<i class="fa fa-tachometer"></i>',
                        ],
                        [
                            'label' => 'App',
                            'options' => [ 'class' => 'nav-label' ]
                        ],
                        [
                            'label' => 'Info',
                            'url' => '#',
                            'icon' => '<i class="fa fa-file-text-o"></i>',
                            'items' => [
                                [
                                    'label' => 'Info about "Ekrassovki"',
                                    'url' => Url::to(['info/view','id' => 1]),
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Carousel',
                                    'url' => ['carousel/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Slider',
                                    'url' => ['slider/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Partners',
                                    'url' => ['partners/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Services',
                                    'url' => ['services/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Payment methods',
                                    'url' => ['payment-method/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Social networks',
                                    'url' => ['socials/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],

                            ]
                        ],
                        [
                            'label' => 'Pages',
                            'url' => Url::to(['pages/index']),
                            'icon' => '<i class="fa  fa-file-o"></i>',
                        ],
                        [
                            'label' => 'Products',
                            'url' => '#',
                            'icon' => '<i class="fa fa-database"></i>',
                            'items' => [
                                [
                                    'label' => 'Category',
                                    'url' => Url::to(['category/index']),
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Brands',
                                    'url' => ['brands/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Countries',
                                    'url' => ['country/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Services',
                                    'url' => ['services/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Payment methods',
                                    'url' => ['payment-method/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],
                                [
                                    'label' => 'Social networks',
                                    'url' => ['socials/index'],
                                    'icon' => '<i class="fa fa-angle-double-right"></i>',
                                ],

                            ]
                        ],
                    ]
                ]);
            } catch ( Exception $e ) {
            }
            
            ?>
        </nav>
    </div>
</div>
