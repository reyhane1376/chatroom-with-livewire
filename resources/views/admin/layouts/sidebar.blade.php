<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i
                        class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3>
        </div>
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                <a href="#" class="waves-effect"><img src="{{ asset('admin-assets/images/users/varun.jpg') }}" alt="user-img"
                        class="img-circle"> <span class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">My
                                Profile</span></a></li>
                    <li><a href="javascript:void(0)"><i class="ti-wallet"></i> <span class="hide-menu">My
                                Balance</span></a></li>
                    <li><a href="javascript:void(0)"><i class="ti-email"></i> <span class="hide-menu">Inbox</span></a>
                    </li>
                    <li><a href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account
                                Setting</span></a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> <span
                                class="hide-menu">Logout</span></a></li>
                </ul>
            </li>
            @role('superAdmin')
            <li> <a href="index.html" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
                    <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span
                            class="label label-rouded label-inverse pull-right">4</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="index.html"><i class=" fa-fw">1</i><span class="hide-menu">Dashboard
                                1</span></a> </li>
                    <li> <a href="index2.html"><i class=" fa-fw">2</i><span class="hide-menu">Dashboard
                                2</span></a> </li>
                    <li> <a href="index3.html"><i class=" fa-fw">3</i><span class="hide-menu">Dashboard
                                3</span></a> </li>
                </ul>
            </li>
          
            <li> <a href="#" class="waves-effect"><i class="mdi mdi-format-color-fill fa-fw"></i> <span
                        class="hide-menu">UI Elements<span class="fa arrow"></span> <span
                            class="label label-rouded label-info pull-right">20</span> </span></a>
                <ul class="nav nav-second-level">
                    <li><a href="panels-wells.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i>
                            <span class="hide-menu">Panels and
                                Wells</span></a></li>
                    <li><a href="panel-ui-block.html"><i data-icon="&#xe025;" class="linea-icon linea-basic fa-fw"></i>
                            <span class="hide-menu">Panels With
                                BlockUI</span></a></li>
                    <li><a href="buttons.html"><i class="ti-layout-menu fa-fw"></i> <span
                                class="hide-menu">Buttons</span></a></li>
                    <li><a href="sweatalert.html"><i class="ti-alert fa-fw"></i> <span class="hide-menu">Sweat
                                alert</span></a></li>
                    <li><a href="typography.html"><i data-icon="k" class="linea-icon linea-software fa-fw"></i>
                            <span class="hide-menu">Typography</span></a></li>
                    <li><a href="grid.html"><i data-icon="&#xe009;" class="linea-icon linea-basic fa-fw"></i>
                            <span class="hide-menu">Grid</span></a></li>
                    <li><a href="tabs.html"><i class="ti-layers fa-fw"></i> <span class="hide-menu">Tabs</span></a></li>
                    <li><a href="tab-stylish.html"><i class=" ti-layers-alt fa-fw"></i> <span class="hide-menu">Stylish
                                Tabs</span></a></li>
                    <li><a href="modals.html"><i data-icon="&#xe026;" class="linea-icon linea-basic fa-fw"></i>
                            <span class="hide-menu">Modals</span></a></li>
                    <li><a href="progressbars.html"><i class="ti-line-double fa-fw"></i> <span
                                class="hide-menu">Progress Bars</span></a></li>
                    <li><a href="notification.html"><i class="ti-info-alt fa-fw"></i> <span
                                class="hide-menu">Notifications</span></a></li>
                    <li><a href="carousel.html"><i class="ti-layout-slider fa-fw"></i> <span
                                class="hide-menu">Carousel</span></a></li>
                    <li><a href="list-style.html"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i>
                            <span class="hide-menu">List & Media
                                object</span></a></li>
                    <li><a href="user-cards.html"><i class="ti-user fa-fw"></i> <span class="hide-menu">User
                                Cards</span></a></li>
                    <li><a href="timeline.html"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span
                                class="hide-menu">Timeline</span></a></li>
                    <li><a href="timeline-horizontal.html"><i class="ti-layout-list-thumb fa-fw"></i> <span
                                class="hide-menu">Horizontal Timeline</span></a></li>
                    <li><a href="nestable.html"><i class="ti-layout-accordion-separated fa-fw"></i> <span
                                class="hide-menu">Nesteble</span></a></li>
                    <li><a href="range-slider.html"><i class=" ti-layout-slider-alt fa-fw"></i> <span
                                class="hide-menu">Range Slider</span></a></li>
                    <li><a href="tooltip-stylish.html"><i class="ti-comments-smiley fa-fw"></i> <span
                                class="hide-menu">Stylish Tooltip</span></a></li>
                    <li><a href="bootstrap.html"><i class="ti-rocket fa-fw"></i> <span class="hide-menu">Bootstrap
                                UI</span></a></li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i class="mdi mdi-content-copy fa-fw"></i> <span
                        class="hide-menu">Sample Pages<span class="fa arrow"></span><span
                            class="label label-rouded label-warning pull-right">30</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="starter-page.html"><i class="ti-layout-width-default fa-fw"></i> <span
                                class="hide-menu">Starter Page</span></a></li>
                    <li><a href="blank.html"><i class="ti-layout-sidebar-left fa-fw"></i> <span class="hide-menu">Blank
                                Page</span></a></li>
                    <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-email fa-fw"></i> <span
                                class="hide-menu">Email Templates</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="../email-templates/basic.html"><i class="fa-fw">B</i> <span
                                        class="hide-menu">Basic</span></a></li>
                            <li> <a href="../email-templates/alert.html"><i class="ti-alert fa-fw"></i> <span
                                        class="hide-menu">Alert</span></a></li>
                            <li> <a href="../email-templates/billing.html"><i class="ti-wallet fa-fw"></i> <span
                                        class="hide-menu">Billing</span></a></li>
                            <li> <a href="../email-templates/password-reset.html"><i class="ti-more fa-fw"></i>
                                    <span class="hide-menu">Reset Pwd</span></a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-lock fa-fw"></i><span
                                class="hide-menu">Authentication</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="login.html"><i class="fa-fw">L</i> <span class="hide-menu">Login
                                        Page</span></a></li>
                            <li><a href="login2.html"><i class="fa-fw">L</i> <span class="hide-menu">Login
                                        v2</span></a></li>
                            <li><a href="register.html"><i class="fa-fw">R</i> <span
                                        class="hide-menu">Register</span></a></li>
                            <li><a href="register2.html"><i class="fa-fw">R</i> <span class="hide-menu">Register
                                        v2</span></a></li>
                            <li><a href="register3.html"><i class="fa-fw">3</i> <span class="hide-menu">3 Step
                                        Registration</span></a></li>
                            <li><a href="recoverpw.html"><i class="fa-fw">R</i> <span class="hide-menu">Recover
                                        Password</span></a></li>
                            <li><a href="lock-screen.html"><i class="fa-fw">L</i> <span class="hide-menu">Lock
                                        Screen</span></a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-info-alt fa-fw"></i><span
                                class="hide-menu">Error Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="400.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error
                                        400</span></a></li>
                            <li><a href="403.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error
                                        403</span></a></li>
                            <li><a href="404.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error
                                        404</span></a></li>
                            <li><a href="500.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error
                                        500</span></a></li>
                            <li><a href="503.html"><i class="ti-info-alt fa-fw"></i> <span class="hide-menu">Error
                                        503</span></a></li>
                        </ul>
                    </li>
                    <li><a href="lightbox.html"><i class="fa-fw">L</i> <span class="hide-menu">Lightbox
                                Popup</span></a></li>
                    <li><a href="treeview.html"><i class="fa-fw">T</i> <span class="hide-menu">Treeview</span></a></li>
                    <li><a href="search-result.html"><i class="fa-fw">S</i> <span class="hide-menu">Search
                                Result</span></a></li>
                    <li><a href="utility-classes.html"><i class="fa-fw">U</i> <span class="hide-menu">Utility
                                Classes</span></a></li>
                    <li><a href="custom-scroll.html"><i class="fa-fw">C</i> <span class="hide-menu">Custom
                                Scrolls</span></a></li>
                    <li><a href="animation.html"><i class="fa-fw">A</i> <span class="hide-menu">Animations</span></a>
                    </li>
                    <li><a href="profile.html"><i class="fa-fw">P</i> <span class="hide-menu">Profile</span></a>
                    </li>
                    <li><a href="invoice.html"><i class="fa-fw">I</i> <span class="hide-menu">Invoice</span></a>
                    </li>
                    <li><a href="faq.html"><i class="fa-fw">F</i> <span class="hide-menu">FAQ</span></a></li>
                    <li><a href="gallery.html"><i class="fa-fw">G</i> <span class="hide-menu">Gallery</span></a>
                    </li>
                    <li><a href="pricing.html"><i class="fa-fw">P</i> <span class="hide-menu">Pricing</span></a>
                    </li>
                </ul>
            </li>
            @endrole()
            <li><a href="inbox.html" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span
                        class="hide-menu">Apps<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('chat-rooms') }}"><i class="ti-comments-smiley fa-fw"></i><span
                                class="hide-menu">Chat-message</span></a></li>
                    <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-desktop fa-fw"></i><span
                                class="hide-menu">Inbox</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="inbox.html"><i class="ti-email fa-fw"></i><span class="hide-menu">Mail
                                        box</span></a></li>
                            <li> <a href="inbox-detail.html"><i class="ti-layout-media-left-alt fa-fw"></i><span
                                        class="hide-menu">Inbox detail</span></a></li>
                            <li> <a href="compose.html"><i class="ti-layout-media-center-alt fa-fw"></i><span
                                        class="hide-menu">Compose mail</span></a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="waves-effect"><i class="ti-user fa-fw"></i><span
                                class="hide-menu">Contacts</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="contact.html"><i class="icon-people fa-fw"></i><span
                                        class="hide-menu">Contact1</span></a></li>
                            <li> <a href="contact2.html"><i class="icon-user-follow fa-fw"></i><span
                                        class="hide-menu">Contact2</span></a></li>
                            <li> <a href="contact-detail.html"><i class="icon-user-following fa-fw"></i><span
                                        class="hide-menu">Contact Detail</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            @role('superAdmin')
            <li class="devider"></li>
            <li> <a href="forms.html" class="waves-effect"><i class="mdi mdi-clipboard-text fa-fw"></i> <span
                        class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="form-basic.html"><i class="fa-fw">B</i><span class="hide-menu">Basic
                                Forms</span></a></li>
                    <li><a href="form-layout.html"><i class="fa-fw">L</i><span class="hide-menu">Form
                                Layout</span></a></li>
                    <li><a href="form-advanced.html"><i class="fa-fw">A</i><span class="hide-menu">Form
                                Addons</span></a></li>
                    <li><a href="form-material-elements.html"><i class="fa-fw">M</i><span class="hide-menu">Form
                                Material</span></a></li>
                    <li><a href="form-float-input.html"><i class="fa-fw">F</i><span class="hide-menu">Form Float
                                Input</span></a></li>
                    <li><a href="form-upload.html"><i class="fa-fw">U</i><span class="hide-menu">File
                                Upload</span></a></li>
                    <li><a href="form-mask.html"><i class="fa-fw">M</i><span class="hide-menu">Form
                                Mask</span></a></li>
                    <li><a href="form-img-cropper.html"><i class="fa-fw">C</i><span class="hide-menu">Image
                                Cropping</span></a></li>
                    <li><a href="form-validation.html"><i class="fa-fw">V</i><span class="hide-menu">Form
                                Validation</span></a></li>
                    <li><a href="form-dropzone.html"><i class="fa-fw">D</i><span class="hide-menu">File
                                Dropzone</span></a></li>
                    <li><a href="form-pickers.html"><i class="fa-fw">P</i><span
                                class="hide-menu">Form-pickers</span></a></li>
                    <li><a href="form-wizard.html"><i class="fa-fw">W</i><span class="hide-menu">Form-wizards</span></a>
                    </li>
                    <li><a href="form-typehead.html"><i class="fa-fw">T</i><span class="hide-menu">Typehead</span></a>
                    </li>
                    <li><a href="form-xeditable.html"><i class="fa-fw">X</i><span
                                class="hide-menu">X-editable</span></a></li>
                    <li><a href="form-summernote.html"><i class="fa-fw">S</i><span
                                class="hide-menu">Summernote</span></a></li>
                    <li><a href="form-bootstrap-wysihtml5.html"><i class=" fa-fw">W</i><span class="hide-menu">Bootstrap
                                wysihtml5</span></a></li>
                    <li><a href="form-tinymce-wysihtml5.html"><i class="fa-fw">T</i><span class="hide-menu">Tinymce
                                wysihtml5</span></a></li>
                </ul>
            </li>
            <li> <a href="tables.html" class="waves-effect"><i class="mdi mdi-table fa-fw"></i> <span
                        class="hide-menu">Tables<span class="fa arrow"></span><span
                            class="label label-rouded label-danger pull-right">9</span></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="basic-table.html"><i class="fa-fw">B</i><span class="hide-menu">Basic
                                Tables</span></a></li>
                    <li><a href="table-layouts.html"><i class="fa-fw">L</i><span class="hide-menu">Table
                                Layouts</span></a></li>
                    <li><a href="data-table.html"><i class="fa-fw">D</i><span class="hide-menu">Data
                                Table</span></a></li>
                    <li><a href="bootstrap-tables.html"><i class="fa-fw">B</i><span class="hide-menu">Bootstrap
                                Tables</span></a></li>
                    <li><a href="responsive-tables.html"><i class="fa-fw">R</i><span class="hide-menu">Responsive
                                Tables</span></a></li>
                    <li><a href="editable-tables.html"><i class="fa-fw">E</i><span class="hide-menu">Editable
                                Tables</span></a></li>
                    <li><a href="foo-tables.html"><i class="fa-fw">F</i><span class="hide-menu">FooTables</span></a>
                    </li>
                    <li><a href="jsgrid.html"><i class="fa-fw">J</i><span class="hide-menu">JsGrid
                                Tables</span></a></li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i class="mdi mdi-chart-bar fa-fw"></i> <span
                        class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="flot.html"><i class="fa-fw">F</i><span class="hide-menu">Flot
                                Charts</span></a> </li>
                    <li><a href="morris-chart.html"><i class="fa-fw">M</i><span class="hide-menu">Morris
                                Chart</span></a></li>
                    <li><a href="chart-js.html"><i class="fa-fw">P</i><span class="hide-menu">Chart-js</span></a></li>
                    <li><a href="peity-chart.html"><i class="fa-fw">P</i><span class="hide-menu">Peity
                                Charts</span></a></li>
                    <li><a href="chartist-js.html"><i class="fa-fw">C</i><span class="hide-menu">Chartist-js</span></a>
                    </li>
                    <li><a href="knob-chart.html"><i class="fa-fw">K</i><span class="hide-menu">Knob
                                Charts</span></a></li>
                    <li><a href="sparkline-chart.html"><i class="fa-fw">S</i><span class="hide-menu">Sparkline
                                charts</span></a></li>
                    <li><a href="extra-charts.html"><i class="fa-fw">E</i><span class="hide-menu">Extra
                                Charts</span></a></li>
                </ul>
            </li>
            <li class="devider"></li>
            <li> <a href="widgets.html" class="waves-effect"><i class="mdi mdi-settings fa-fw"></i> <span
                        class="hide-menu">Widgets</span></a> </li>
            <li> <a href="#" class="waves-effect"><i class="mdi mdi-emoticon fa-fw"></i> <span
                        class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="fontawesome.html"><i class="fa-fw">F</i><span class="hide-menu">Font
                                awesome</span></a> </li>
                    <li> <a href="themifyicon.html"><i class="fa-fw">T</i><span class="hide-menu">Themify
                                Icons</span></a> </li>
                    <li> <a href="simple-line.html"><i class="fa-fw">S</i><span class="hide-menu">Simple line
                                Icons</span></a> </li>
                    <li> <a href="material-icons.html"><i class="fa-fw">M</i><span class="hide-menu">Material
                                Icons</span></a> </li>
                    <li><a href="linea-icon.html"><i class="fa-fw">L</i><span class="hide-menu">Linea
                                Icons</span></a></li>
                    <li><a href="weather.html"><i class="fa-fw">W</i><span class="hide-menu">Weather
                                Icons</span></a></li>
                </ul>
            </li>
            <li> <a href="map-google.html" class="waves-effect"><i class="mdi mdi-google-maps fa-fw"></i><span
                        class="hide-menu">Google Map</span></a> </li>
            <li> <a href="map-vector.html" class="waves-effect"><i class="mdi mdi-map-marker fa-fw"></i><span
                        class="hide-menu">Vector Map</span></a> </li>
            <li> <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-check fa-fw"></i> <span
                        class="hide-menu">Calendar</span></a></li>
            <li> <a href="javascript:void(0)" class="waves-effect"><i
                        class="mdi mdi-checkbox-multiple-marked-outline fa-fw"></i> <span class="hide-menu">Multi-Level
                        Dropdown<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="javascript:void(0)"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i><span
                                class="hide-menu">Second Level
                                Item</span></a> </li>
                    <li> <a href="javascript:void(0)"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i><span
                                class="hide-menu">Second Level
                                Item</span></a> </li>
                    <li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe008;"
                                class="linea-icon linea-basic fa-fw"></i><span class="hide-menu">Third Level
                            </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li> <a href="javascript:void(0)"><i class=" fa-fw">T</i><span class="hide-menu">Third Level
                                        Item</span></a> </li>
                            <li> <a href="javascript:void(0)"><i class=" fa-fw">M</i><span class="hide-menu">Third Level
                                        Item</span></a> </li>
                            <li> <a href="javascript:void(0)"><i class=" fa-fw">R</i><span class="hide-menu">Third Level
                                        Item</span></a> </li>
                            <li> <a href="javascript:void(0)"><i class=" fa-fw">G</i><span class="hide-menu">Third Level
                                        Item</span></a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="login.html" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span
                        class="hide-menu">Log out</span></a></li>
            <li class="devider"></li>
            <li><a href="documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i>
                    <span class="hide-menu">Documentation</span></a></li>
            <li><a href="gallery.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span
                        class="hide-menu">Gallery</span></a></li>
            <li><a href="faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span
                        class="hide-menu">Faqs</span></a></li>
                        @endrole()
        </ul>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Left Sidebar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page Content -->
<!-- ============================================================== -->