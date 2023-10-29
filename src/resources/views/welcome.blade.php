<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

  <!-- Global stylesheets -->
  <link href="../../../assets/fonts/inter/inter.css" rel="stylesheet" type="text/css" />
  <link href="../../../assets/icons/phosphor/styles.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/ltr/all.min.css" id="stylesheet" rel="stylesheet" type="text/css" />
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="../../../assets/demo/demo_configurator.js"></script>
  <script src="../../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="../../../assets/js/vendor/visualization/echarts/echarts.min.js"></script>
  <script src="../../../assets/js/vendor/maps/echarts/world.js"></script>

  <script src="assets/js/app.js"></script>
  <script src="../../../assets/demo/charts/pages/dashboard_6/area_gradient.js"></script>
  <script src="../../../assets/demo/charts/pages/dashboard_6/map_europe_effect.js"></script>
  <script src="../../../assets/demo/charts/pages/dashboard_6/progress_sortable.js"></script>
  <script src="../../../assets/demo/charts/pages/dashboard_6/bars_grouped.js"></script>
  <script src="../../../assets/demo/charts/pages/dashboard_6/line_label_marks.js"></script>
  <!-- /theme JS files -->
</head>

<body>
  <!-- Main navbar -->
  <div class="navbar navbar-expand-xl navbar-static shadow">
    <div class="container-fluid">
      <div class="navbar-brand flex-1">
        <a href="index.html" class="d-inline-flex align-items-center">
          <img src="../../../assets/images/logo_icon.svg" alt="" />
          <img src="../../../assets/images/logo_text_dark.svg" class="d-none d-sm-inline-block h-16px invert-dark ms-3"
            alt="" />
        </a>
      </div>

      <div
        class="d-flex w-100 w-xl-auto overflow-auto overflow-xl-visible scrollbar-hidden border-top border-top-xl-0 order-1 order-xl-0 pt-2 pt-xl-0 mt-2 mt-xl-0">
        <ul class="nav gap-1 justify-content-center flex-nowrap flex-xl-wrap mx-auto">
          <li class="nav-item">
            <a href="index.html" class="navbar-nav-link rounded active">
              <i class="ph-house me-2"></i>
              Home
            </a>
          </li>

          <li class="nav-item nav-item-dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown"
              data-bs-auto-close="outside">
              <i class="ph-rows me-2"></i>
              Navigation
            </a>

            <div class="dropdown-menu p-0">
              <div class="d-xl-flex">
                <div
                  class="d-flex flex-row flex-xl-column bg-light overflow-auto overflow-xl-visible rounded-top rounded-top-xl-0 rounded-start-xl">
                  <div class="flex-1 border-bottom border-bottom-xl-0 p-2 p-xl-3">
                    <div class="fw-bold border-bottom d-none d-xl-block pb-2 mb-2">
                      Navigation
                    </div>
                    <ul class="nav nav-pills flex-xl-column flex-nowrap text-nowrap justify-content-center wmin-xl-300"
                      role="tablist">
                      <li class="nav-item" role="presentation">
                        <a href="#tab_page" class="nav-link rounded active" data-bs-toggle="tab" aria-selected="true"
                          role="tab">
                          <i class="ph-layout me-2"></i>
                          Page
                          <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#tab_navbars" class="nav-link rounded" data-bs-toggle="tab" aria-selected="false"
                          tabindex="-1" role="tab">
                          <i class="ph-rows me-2"></i>
                          Navbars
                          <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#tab_sidebar_types" class="nav-link rounded" data-bs-toggle="tab" aria-selected="false"
                          tabindex="-1" role="tab">
                          <i class="ph-columns me-2"></i>
                          Sidebar types
                          <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#tab_sidebar_content" class="nav-link rounded" data-bs-toggle="tab"
                          aria-selected="false" tabindex="-1" role="tab">
                          <i class="ph-sidebar-simple me-2"></i>
                          Sidebar content
                          <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                        </a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#tab_navigation" class="nav-link rounded" data-bs-toggle="tab" aria-selected="false"
                          tabindex="-1" role="tab">
                          <i class="ph-list-dashes me-2"></i>
                          Navigation
                          <i class="ph-arrow-right nav-item-active-indicator d-none d-xl-inline-block ms-auto"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="tab-content flex-xl-1">
                  <div class="tab-pane dropdown-scrollable-xl fade show active p-3" id="tab_page" role="tabpanel">
                    <div class="row">
                      <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Sections
                        </div>
                        <a href="layout_no_header.html" class="dropdown-item rounded">No header</a>
                        <a href="layout_no_footer.html" class="dropdown-item rounded">No footer</a>
                        <a href="layout_fixed_header.html" class="dropdown-item rounded">Fixed header</a>
                        <a href="layout_fixed_footer.html" class="dropdown-item rounded">Fixed footer</a>
                      </div>

                      <div class="col-lg-4 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Sidebars
                        </div>
                        <a href="layout_2_sidebars_1_side.html" class="dropdown-item rounded">2 sidebars on 1 side</a>
                        <a href="layout_2_sidebars_2_sides.html" class="dropdown-item rounded">2 sidebars on 2
                          sides</a>
                        <a href="layout_3_sidebars.html" class="dropdown-item rounded">3 sidebars</a>
                      </div>

                      <div class="col-lg-4">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Layout
                        </div>
                        <a href="layout_static.html" class="dropdown-item rounded">Static layout</a>
                        <a href="layout_boxed_page.html" class="dropdown-item rounded">Boxed page</a>
                        <a href="layout_liquid_content.html" class="dropdown-item rounded">Liquid content</a>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane dropdown-scrollable-xl fade p-3" id="tab_navbars" role="tabpanel">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Single
                        </div>
                        <a href="navbar_single_top_static.html" class="dropdown-item rounded">Top static</a>
                        <a href="navbar_single_top_fixed.html" class="dropdown-item rounded">Top fixed</a>
                        <a href="navbar_single_bottom_static.html" class="dropdown-item rounded">Bottom static</a>
                        <a href="navbar_single_bottom_fixed.html" class="dropdown-item rounded">Bottom fixed</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Multiple
                        </div>
                        <a href="navbar_multiple_top_static.html" class="dropdown-item rounded">Top static</a>
                        <a href="navbar_multiple_top_fixed.html" class="dropdown-item rounded">Top fixed</a>
                        <a href="navbar_multiple_bottom_static.html" class="dropdown-item rounded">Bottom static</a>
                        <a href="navbar_multiple_bottom_fixed.html" class="dropdown-item rounded">Bottom fixed</a>
                        <a href="navbar_multiple_top_bottom_fixed.html" class="dropdown-item rounded">Top and bottom
                          fixed</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Content
                        </div>
                        <a href="navbar_component_single.html" class="dropdown-item rounded">Single navbar</a>
                        <a href="navbar_component_multiple.html" class="dropdown-item rounded">Multiple navbars</a>
                      </div>

                      <div class="col-lg-3">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Other
                        </div>
                        <a href="navbar_colors.html" class="dropdown-item rounded">Color options</a>
                        <a href="navbar_sizes.html" class="dropdown-item rounded">Sizing options</a>
                        <a href="navbar_components.html" class="dropdown-item rounded">Navbar components</a>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane dropdown-scrollable-xl fade p-3" id="tab_sidebar_types" role="tabpanel">
                    <div class="row">
                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Main
                        </div>
                        <a href="sidebar_default_resizable.html" class="dropdown-item rounded">Resizable</a>
                        <a href="sidebar_default_resized.html" class="dropdown-item rounded">Resized</a>
                        <a href="sidebar_default_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                        <a href="sidebar_default_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                        <a href="sidebar_default_hideable.html" class="dropdown-item rounded">Hideable</a>
                        <a href="sidebar_default_hidden.html" class="dropdown-item rounded">Hidden</a>
                        <a href="sidebar_default_color_dark.html" class="dropdown-item rounded">Dark color</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Secondary
                        </div>
                        <a href="sidebar_secondary_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                        <a href="sidebar_secondary_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                        <a href="sidebar_secondary_hideable.html" class="dropdown-item rounded">Hideable</a>
                        <a href="sidebar_secondary_hidden.html" class="dropdown-item rounded">Hidden</a>
                        <a href="sidebar_secondary_color_dark.html" class="dropdown-item rounded">Dark color</a>
                      </div>

                      <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Right
                        </div>
                        <a href="sidebar_right_collapsible.html" class="dropdown-item rounded">Collapsible</a>
                        <a href="sidebar_right_collapsed.html" class="dropdown-item rounded">Collapsed</a>
                        <a href="sidebar_right_hideable.html" class="dropdown-item rounded">Hideable</a>
                        <a href="sidebar_right_hidden.html" class="dropdown-item rounded">Hidden</a>
                        <a href="sidebar_right_color_dark.html" class="dropdown-item rounded">Dark color</a>
                      </div>

                      <div class="col-lg-3">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Content
                        </div>
                        <a href="sidebar_content_left.html" class="dropdown-item rounded">Left aligned</a>
                        <a href="sidebar_content_left_stretch.html" class="dropdown-item rounded">Left stretched</a>
                        <a href="sidebar_content_left_sections.html" class="dropdown-item rounded">Left sectioned</a>
                        <a href="sidebar_content_right.html" class="dropdown-item rounded">Right aligned</a>
                        <a href="sidebar_content_right_stretch.html" class="dropdown-item rounded">Right stretched</a>
                        <a href="sidebar_content_right_sections.html" class="dropdown-item rounded">Right
                          sectioned</a>
                        <a href="sidebar_content_color_dark.html" class="dropdown-item rounded">Dark color</a>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane dropdown-scrollable-xl fade p-3" id="tab_sidebar_content" role="tabpanel">
                    <div class="row">
                      <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Sticky areas
                        </div>
                        <a href="sidebar_sticky_header.html" class="dropdown-item rounded">Header</a>
                        <a href="sidebar_sticky_footer.html" class="dropdown-item rounded">Footer</a>
                        <a href="sidebar_sticky_header_footer.html" class="dropdown-item rounded">Header and
                          footer</a>
                        <a href="sidebar_sticky_custom.html" class="dropdown-item rounded">Custom elements</a>
                      </div>

                      <div class="col-lg-6">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Other
                        </div>
                        <a href="sidebar_components.html" class="dropdown-item rounded">Sidebar components</a>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane dropdown-scrollable-xl fade p-3" id="tab_navigation" role="tabpanel">
                    <div class="row">
                      <div class="col-lg-6 mb-3 mb-lg-0">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Vertical
                        </div>
                        <a href="navigation_vertical_styles.html" class="dropdown-item rounded">Navigation styles</a>
                        <a href="navigation_vertical_collapsible.html" class="dropdown-item rounded">Collapsible
                          menu</a>
                        <a href="navigation_vertical_accordion.html" class="dropdown-item rounded">Accordion menu</a>
                        <a href="navigation_vertical_bordered.html" class="dropdown-item rounded">Bordered
                          navigation</a>
                        <a href="navigation_vertical_right_icons.html" class="dropdown-item rounded">Right icons</a>
                        <a href="navigation_vertical_badges.html" class="dropdown-item rounded">Badges</a>
                        <a href="navigation_vertical_disabled.html" class="dropdown-item rounded">Disabled items</a>
                      </div>

                      <div class="col-lg-6">
                        <div class="fw-bold border-bottom pb-2 mb-2">
                          Horizontal
                        </div>
                        <a href="navigation_horizontal_styles.html" class="dropdown-item rounded">Navigation
                          styles</a>
                        <a href="navigation_horizontal_elements.html" class="dropdown-item rounded">Navigation
                          elements</a>
                        <a href="navigation_horizontal_tabs.html" class="dropdown-item rounded">Tabbed navigation</a>
                        <a href="navigation_horizontal_disabled.html" class="dropdown-item rounded">Disabled items</a>
                        <a href="navigation_horizontal_mega.html" class="dropdown-item rounded">Mega menu</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="nav-item nav-item-dropdown-xl dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
              <i class="ph-note-blank me-2"></i>
              Starter kit
            </a>

            <div class="dropdown-menu">
              <div class="dropdown-submenu dropdown-submenu-start">
                <a href="#" class="dropdown-item dropdown-toggle">
                  <i class="ph-columns me-2"></i>
                  Sidebars
                </a>
                <div class="dropdown-menu">
                  <a href="../seed/layout_2_sidebars_1_side.html" class="dropdown-item rounded">2 sidebars on 1
                    side</a>
                  <a href="../seed/layout_2_sidebars_2_sides.html" class="dropdown-item rounded">2 sidebars on 2
                    sides</a>
                  <a href="../seed/layout_3_sidebars.html" class="dropdown-item rounded">3 sidebars</a>
                </div>
              </div>
              <div class="dropdown-submenu dropdown-submenu-start">
                <a href="#" class="dropdown-item dropdown-toggle">
                  <i class="ph-rows me-2"></i>
                  Sections
                </a>
                <div class="dropdown-menu">
                  <a href="../seed/layout_no_header.html" class="dropdown-item rounded">No header</a>
                  <a href="../seed/layout_no_footer.html" class="dropdown-item rounded">No footer</a>
                  <a href="../seed/layout_fixed_header.html" class="dropdown-item rounded">Fixed header</a>
                  <a href="../seed/layout_fixed_footer.html" class="dropdown-item rounded">Fixed footer</a>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <a href="../seed/layout_static.html" class="dropdown-item rounded">Static layout</a>
              <a href="../seed/layout_boxed_page.html" class="dropdown-item rounded">Boxed page</a>
              <a href="../seed/layout_liquid_content.html" class="dropdown-item rounded">Liquid content</a>
            </div>
          </li>

          <li class="nav-item nav-item-dropdown-xl dropdown">
            <a href="#" class="navbar-nav-link dropdown-toggle rounded" data-bs-toggle="dropdown">
              <i class="ph-arrows-clockwise me-2"></i>
              Switch
            </a>

            <div class="dropdown-menu dropdown-menu-end">
              <div class="dropdown-submenu dropdown-submenu-start">
                <a href="#" class="dropdown-item dropdown-toggle">
                  <i class="ph-layout me-2"></i>
                  Layouts
                </a>
                <div class="dropdown-menu">
                  <a href="../../layout_1/full/index.html" class="dropdown-item">Default layout</a>
                  <a href="../../layout_2/full/index.html" class="dropdown-item">Layout 2</a>
                  <a href="../../layout_3/full/index.html" class="dropdown-item">Layout 3</a>
                  <a href="../../layout_4/full/index.html" class="dropdown-item">Layout 4</a>
                  <a href="../../layout_5/full/index.html" class="dropdown-item">Layout 5</a>
                  <a href="index.html" class="dropdown-item active">Layout 6</a>
                  <a href="../../layout_7/full/index.html" class="dropdown-item disabled">
                    Layout 7
                    <span class="opacity-75 fs-sm ms-auto">Coming soon</span>
                  </a>
                </div>
              </div>
              <div class="dropdown-submenu dropdown-submenu-start">
                <a href="#" class="dropdown-item dropdown-toggle">
                  <i class="ph-swatches me-2"></i>
                  Themes
                </a>
                <div class="dropdown-menu">
                  <a href="index.html" class="dropdown-item active">Default</a>
                  <a href="../../../LTR/material/full/index.html" class="dropdown-item disabled">
                    Material
                    <span class="opacity-75 fs-sm ms-auto">Coming soon</span>
                  </a>
                  <a href="../../../LTR/clean/full/index.html" class="dropdown-item disabled">
                    Clean
                    <span class="opacity-75 fs-sm ms-auto">Coming soon</span>
                  </a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <ul class="nav gap-1 flex-xl-1 justify-content-end order-0 order-xl-1">
        <li class="nav-item nav-item-dropdown-xl dropdown">
          <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
            <div class="status-indicator-container">
              <img src="../../../assets/images/demo/users/face11.jpg" class="w-32px h-32px rounded-pill"
                alt="" />
              <span class="status-indicator bg-success"></span>
            </div>
            <span class="d-none d-md-inline-block mx-md-2">Victoria</span>
          </a>

          <div class="dropdown-menu dropdown-menu-end">
            <a href="#" class="dropdown-item">
              <i class="ph-user-circle me-2"></i>
              My profile
            </a>
            <a href="#" class="dropdown-item">
              <i class="ph-currency-circle-dollar me-2"></i>
              My subscription
            </a>
            <a href="#" class="dropdown-item">
              <i class="ph-shopping-cart me-2"></i>
              My orders
            </a>
            <a href="#" class="dropdown-item">
              <i class="ph-envelope-open me-2"></i>
              My inbox
              <span class="badge bg-primary rounded-pill ms-auto">26</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="ph-gear me-2"></i>
              Account settings
            </a>
            <a href="#" class="dropdown-item">
              <i class="ph-sign-out me-2"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- /main navbar -->

  <!-- Page content -->
  <div class="page-content">
    <!-- Main content -->
    <div class="content-wrapper">
      <!-- Inner content -->
      <div class="content-inner">
        <!-- Page header -->
        <div class="page-header">
          <div class="page-header-content container d-lg-flex">
            <div class="d-flex">
              <h4 class="page-title mb-0">
                Home - <span class="fw-normal">Dashboard</span>
              </h4>

              <a href="#page_header"
                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content container pt-0">
          <!-- Blocks with chart -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/3.png" alt="" />

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Or kind rest bred with am shed then. In raptures building
                    an bringing be. Elderly is detract tedious assured private
                    so to visited. Do travelling companions contrasted.
                  </p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <span class="text-muted">Last updated 5 hours ago</span>
                  <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star-half fs-base text-warning"></i>
                    <span class="text-muted ms-1">(63)</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- /blocks with chart -->

          <!-- Blocks with chart -->
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/1.png" alt="" />

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    It prepare is ye nothing blushes up brought. Or as gravity
                    pasture limited evening on. Wicket around beauty say she.
                    Frankness resembled say not new smallness.
                  </p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <span class="text-muted">Last updated 3 mins ago</span>
                  <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star-half fs-base text-warning"></i>
                    <span class="text-muted ms-1">(12)</span>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/1.png" alt="" />

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    It prepare is ye nothing blushes up brought. Or as gravity
                    pasture limited evening on. Wicket around beauty say she.
                    Frankness resembled say not new smallness.
                  </p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <span class="text-muted">Last updated 3 mins ago</span>
                  <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star-half fs-base text-warning"></i>
                    <span class="text-muted ms-1">(12)</span>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/2.png" alt="" />

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Conveying or northward offending admitting perfectly my.
                    Colonel gravity get thought fat smiling add but. Wonder
                    twenty hunted and put income set desire expect.
                  </p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <span class="text-muted">Last updated 12 mins ago</span>
                  <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <span class="text-muted ms-1">(24)</span>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card">
                <img class="card-img-top img-fluid" src="../../../assets/images/demo/flat/3.png" alt="" />

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">
                    Or kind rest bred with am shed then. In raptures building
                    an bringing be. Elderly is detract tedious assured private
                    so to visited. Do travelling companions contrasted.
                  </p>
                </div>

                <div class="card-footer d-flex justify-content-between">
                  <span class="text-muted">Last updated 5 hours ago</span>
                  <span class="hstack gap-1">
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star fs-base text-warning"></i>
                    <i class="ph-star-half fs-base text-warning"></i>
                    <span class="text-muted ms-1">(63)</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- /blocks with chart -->
        </div>
        <!-- /content area -->

        <!-- Footer -->
        <div class="navbar navbar-sm navbar-footer border-top">
          <div class="container-fluid">
            <span>&copy; 2022
              <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless Web
                App Kit</a></span>

            <ul class="nav">
              <li class="nav-item">
                <a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded"
                  target="_blank">
                  <div class="d-flex align-items-center mx-md-1">
                    <i class="ph-lifebuoy"></i>
                    <span class="d-none d-md-inline-block ms-2">Support</span>
                  </div>
                </a>
              </li>
              <li class="nav-item ms-md-1">
                <a href="https://demo.interface.club/limitless/demo/Documentation/index.html"
                  class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                  <div class="d-flex align-items-center mx-md-1">
                    <i class="ph-file-text"></i>
                    <span class="d-none d-md-inline-block ms-2">Docs</span>
                  </div>
                </a>
              </li>
              <li class="nav-item ms-md-1">
                <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                  class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded"
                  target="_blank">
                  <div class="d-flex align-items-center mx-md-1">
                    <i class="ph-shopping-cart"></i>
                    <span class="d-none d-md-inline-block ms-2">Purchase</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /footer -->
      </div>
      <!-- /inner content -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->

  <!-- Notifications -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="notifications">
    <div class="offcanvas-header py-0">
      <h5 class="offcanvas-title py-3">Activity</h5>
      <button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill"
        data-bs-dismiss="offcanvas">
        <i class="ph-x"></i>
      </button>
    </div>

    <div class="offcanvas-body p-0">
      <div class="bg-light fw-medium py-2 px-3">New notifications</div>
      <div class="p-3">
        <div class="d-flex align-items-start mb-3">
          <a href="#" class="status-indicator-container me-3">
            <img src="../../../assets/images/demo/users/face1.jpg" class="w-40px h-40px rounded-pill"
              alt="" />
            <span class="status-indicator bg-success"></span>
          </a>
          <div class="flex-fill">
            <a href="#" class="fw-semibold">James</a> has completed the task
            <a href="#">Submit documents</a> from
            <a href="#">Onboarding</a> list

            <div class="bg-light rounded p-2 my-2">
              <label class="form-check ms-1">
                <input type="checkbox" class="form-check-input" checked disabled />
                <del class="form-check-label">Submit personal documents</del>
              </label>
            </div>

            <div class="fs-sm text-muted mt-1">2 hours ago</div>
          </div>
        </div>

        <div class="d-flex align-items-start mb-3">
          <a href="#" class="status-indicator-container me-3">
            <img src="../../../assets/images/demo/users/face3.jpg" class="w-40px h-40px rounded-pill"
              alt="" />
            <span class="status-indicator bg-warning"></span>
          </a>
          <div class="flex-fill">
            <a href="#" class="fw-semibold">Margo</a> has added 4 users to
            <span class="fw-semibold">Customer enablement</span> channel

            <div class="d-flex my-2">
              <a href="#" class="status-indicator-container me-1">
                <img src="../../../assets/images/demo/users/face10.jpg" class="w-32px h-32px rounded-pill"
                  alt="" />
                <span class="status-indicator bg-danger"></span>
              </a>
              <a href="#" class="status-indicator-container me-1">
                <img src="../../../assets/images/demo/users/face11.jpg" class="w-32px h-32px rounded-pill"
                  alt="" />
                <span class="status-indicator bg-success"></span>
              </a>
              <a href="#" class="status-indicator-container me-1">
                <img src="../../../assets/images/demo/users/face12.jpg" class="w-32px h-32px rounded-pill"
                  alt="" />
                <span class="status-indicator bg-success"></span>
              </a>
              <a href="#" class="status-indicator-container me-1">
                <img src="../../../assets/images/demo/users/face13.jpg" class="w-32px h-32px rounded-pill"
                  alt="" />
                <span class="status-indicator bg-success"></span>
              </a>
              <button type="button"
                class="btn btn-light btn-icon d-inline-flex align-items-center justify-content-center w-32px h-32px rounded-pill p-0">
                <i class="ph-plus ph-sm"></i>
              </button>
            </div>

            <div class="fs-sm text-muted mt-1">3 hours ago</div>
          </div>
        </div>

        <div class="d-flex align-items-start">
          <div class="me-3">
            <div class="bg-warning bg-opacity-10 text-warning rounded-pill">
              <i class="ph-warning p-2"></i>
            </div>
          </div>
          <div class="flex-1">
            Subscription <a href="#">#466573</a> from 10.12.2021 has been
            cancelled. Refund case <a href="#">#4492</a> created
            <div class="fs-sm text-muted mt-1">4 hours ago</div>
          </div>
        </div>
      </div>

      <div class="bg-light fw-medium py-2 px-3">Older notifications</div>
      <div class="p-3">
        <div class="d-flex align-items-start mb-3">
          <a href="#" class="status-indicator-container me-3">
            <img src="../../../assets/images/demo/users/face25.jpg" class="w-40px h-40px rounded-pill"
              alt="" />
            <span class="status-indicator bg-success"></span>
          </a>
          <div class="flex-fill">
            <a href="#" class="fw-semibold">Nick</a> requested your feedback
            and approval in support request <a href="#">#458</a>

            <div class="my-2">
              <a href="#" class="btn btn-success btn-sm me-1">
                <i class="ph-checks ph-sm me-1"></i>
                Approve
              </a>
              <a href="#" class="btn btn-light btn-sm"> Review </a>
            </div>

            <div class="fs-sm text-muted mt-1">3 days ago</div>
          </div>
        </div>

        <div class="d-flex align-items-start mb-3">
          <a href="#" class="status-indicator-container me-3">
            <img src="../../../assets/images/demo/users/face24.jpg" class="w-40px h-40px rounded-pill"
              alt="" />
            <span class="status-indicator bg-grey"></span>
          </a>
          <div class="flex-fill">
            <a href="#" class="fw-semibold">Mike</a> added 1 new file(s) to
            <a href="#">Product management</a> project

            <div class="bg-light rounded p-2 my-2">
              <div class="d-flex align-items-center">
                <div class="me-2">
                  <img src="../../../assets/images/icons/pdf.svg" width="34" height="34" alt="" />
                </div>
                <div class="flex-fill">
                  new_contract.pdf
                  <div class="fs-sm text-muted">112KB</div>
                </div>
                <div class="ms-2">
                  <button type="button"
                    class="btn btn-flat-dark text-body btn-icon btn-sm border-transparent rounded-pill">
                    <i class="ph-arrow-down"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="fs-sm text-muted mt-1">1 day ago</div>
          </div>
        </div>

        <div class="d-flex align-items-start mb-3">
          <div class="me-3">
            <div class="bg-success bg-opacity-10 text-success rounded-pill">
              <i class="ph-calendar-plus p-2"></i>
            </div>
          </div>
          <div class="flex-fill">
            All hands meeting will take place coming Thursday at 13:45.

            <div class="my-2">
              <a href="#" class="btn btn-primary btn-sm">
                <i class="ph-calendar-plus ph-sm me-1"></i>
                Add to calendar
              </a>
            </div>

            <div class="fs-sm text-muted mt-1">2 days ago</div>
          </div>
        </div>

        <div class="d-flex align-items-start mb-3">
          <a href="#" class="status-indicator-container me-3">
            <img src="../../../assets/images/demo/users/face4.jpg" class="w-40px h-40px rounded-pill"
              alt="" />
            <span class="status-indicator bg-danger"></span>
          </a>
          <div class="flex-fill">
            <a href="#" class="fw-semibold">Christine</a> commented on your
            community <a href="#">post</a> from 10.12.2021

            <div class="fs-sm text-muted mt-1">2 days ago</div>
          </div>
        </div>

        <div class="d-flex align-items-start mb-3">
          <div class="me-3">
            <div class="bg-primary bg-opacity-10 text-primary rounded-pill">
              <i class="ph-users-four p-2"></i>
            </div>
          </div>
          <div class="flex-fill">
            <span class="fw-semibold">HR department</span> requested you to
            complete internal survey by Friday

            <div class="fs-sm text-muted mt-1">3 days ago</div>
          </div>
        </div>

        <div class="text-center">
          <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /notifications -->

  <!-- Demo config -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="demo_config">
    <div class="position-absolute top-50 end-100 visible">
      <button type="button" class="btn btn-primary btn-icon translate-middle-y rounded-end-0"
        data-bs-toggle="offcanvas" data-bs-target="#demo_config">
        <i class="ph-gear"></i>
      </button>
    </div>

    <div class="offcanvas-header border-bottom py-0">
      <h5 class="offcanvas-title py-3">Demo configuration</h5>
      <button type="button" class="btn btn-light btn-sm btn-icon border-transparent rounded-pill"
        data-bs-dismiss="offcanvas">
        <i class="ph-x"></i>
      </button>
    </div>

    <div class="offcanvas-body">
      <div class="fw-semibold mb-2">Color mode</div>
      <div class="list-group mb-3">
        <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
          <div class="d-flex flex-fill my-1">
            <div class="form-check-label d-flex me-2">
              <i class="ph-sun ph-lg me-3"></i>
              <div>
                <span class="fw-bold">Light theme</span>
                <div class="fs-sm text-muted">
                  Set light theme or reset to default
                </div>
              </div>
            </div>
            <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme" value="light"
              checked />
          </div>
        </label>

        <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-2">
          <div class="d-flex flex-fill my-1">
            <div class="form-check-label d-flex me-2">
              <i class="ph-moon ph-lg me-3"></i>
              <div>
                <span class="fw-bold">Dark theme</span>
                <div class="fs-sm text-muted">Switch to dark theme</div>
              </div>
            </div>
            <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme"
              value="dark" />
          </div>
        </label>

        <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
          <div class="d-flex flex-fill my-1">
            <div class="form-check-label d-flex me-2">
              <i class="ph-translate ph-lg me-3"></i>
              <div>
                <span class="fw-bold">Auto theme</span>
                <div class="fs-sm text-muted">
                  Set theme based on system mode
                </div>
              </div>
            </div>
            <input type="radio" class="form-check-input cursor-pointer ms-auto" name="main-theme"
              value="auto" />
          </div>
        </label>
      </div>

      <div class="fw-semibold mb-2">Direction</div>
      <div class="list-group mb-3">
        <label class="list-group-item list-group-item-action form-check border-width-1 rounded mb-0">
          <div class="d-flex flex-fill my-1">
            <div class="form-check-label d-flex me-2">
              <i class="ph-translate ph-lg me-3"></i>
              <div>
                <span class="fw-bold">RTL direction</span>
                <div class="text-muted">Toggle between LTR and RTL</div>
              </div>
            </div>
            <input type="checkbox" name="layout-direction" value="rtl"
              class="form-check-input cursor-pointer m-0 ms-auto" />
          </div>
        </label>
      </div>

      <div class="fw-semibold mb-2">Layouts</div>
      <div class="row">
        <div class="col-12">
          <a href="../../layout_1/full/index.html" class="d-block mb-3">
            <img src="https://demo.interface.club/limitless/assets/images/layouts/layout_1.png"
              class="img-fluid img-thumbnail" alt="" />
          </a>
        </div>
        <div class="col-12">
          <a href="../../layout_2/full/index.html" class="d-block mb-3">
            <img src="https://demo.interface.club/limitless/assets/images/layouts/layout_2.png"
              class="img-fluid img-thumbnail" alt="" />
          </a>
        </div>
        <div class="col-12">
          <a href="../../layout_3/full/index.html" class="d-block mb-3">
            <img src="https://demo.interface.club/limitless/assets/images/layouts/layout_3.png"
              class="img-fluid img-thumbnail" alt="" />
          </a>
        </div>
        <div class="col-12">
          <a href="../../layout_4/full/index.html" class="d-block mb-3">
            <img src="https://demo.interface.club/limitless/assets/images/layouts/layout_4.png"
              class="img-fluid img-thumbnail" alt="" />
          </a>
        </div>
        <div class="col-12">
          <a href="../../layout_5/full/index.html" class="d-block mb-3">
            <img src="https://demo.interface.club/limitless/assets/images/layouts/layout_5.png"
              class="img-fluid img-thumbnail" alt="" />
          </a>
        </div>
        <div class="col-12">
          <a href="index.html" class="d-block">
            <img src="https://demo.interface.club/limitless/assets/images/layouts/layout_6.png"
              class="img-fluid img-thumbnail bg-primary bg-opacity-20 border-primary" alt="" />
          </a>
        </div>
      </div>
    </div>

    <div class="border-top text-center py-2 px-3">
      <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
        class="btn btn-yellow fw-semibold w-100 my-1" target="_blank">
        <i class="ph-shopping-cart me-2"></i>
        Purchase Limitless
      </a>
    </div>
  </div>
  <!-- /demo config -->
</body>

</html>
