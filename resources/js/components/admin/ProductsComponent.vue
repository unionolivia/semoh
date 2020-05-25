<template>
<div>
  <div
    class="main-menu menu-fixed menu-light menu-accordion menu-shadow"
    data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto">
          <a class="navbar-brand" href="/">
            <div class="brand-logo"></div>
            <h2 class="brand-text mb-0"><router-link :to="{name: 'home'}">1000homes</router-link></h2>
          </a>
        </li>
        <li class="nav-item nav-toggle">
          <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
          <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
              class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary"
              data-ticon="icon-disc"></i></a>
        </li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main"
       v-if="isLoggedIn"
        id="main-menu-navigation"
        data-menu="menu-navigation">
        <li class="nav-item">
          <a href="dashboard">
            <i class="feather icon-home"></i>
            <span class="menu-title" data-i18n="">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <i class="feather icon-users"></i>
            <span class="menu-title" data-i18n="">Register User</span>
          </a>
          <ul class="menu-content">
            <li class="">
              <a href="adduser">
                <i class="feather icon-user-plus"></i>
                <span class="menu-title" data-i18n="">Add User</span>
              </a>
            </li>
            <li class="">
              <a href="viewuser">
                <i class="feather icon-user"></i>
                <span class="menu-title" data-i18n="">View User</span>
              </a>
            </li>
            <li class="">
              <a href="approveuser">
                <i class="feather icon-users"></i>
                <span class="menu-title" data-i18n="">Approve User</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#">
            <i class="feather icon-shopping-bag"></i>
            <span class="menu-title" data-i18n="">Portfolio</span>
          </a>
          <ul class="menu-content">
            <li class="">
              <a href="addproject">
                <i class="feather icon-layout"></i>
                <span class="menu-title" data-i18n="">Add Project</span>
              </a>
            </li>
            <li class="">
              <a href="viewproject">
                <i class="feather icon-layout"></i>
                <span class="menu-title" data-i18n="">View project</span>
              </a>
            </li>
            <li class="">
              <a href="updateproject">
                <i class="feather icon-layout"></i>
                <span class="menu-title" data-i18n="">Update proect</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#">
            <i class="feather icon-pocket"></i>
            <span class="menu-title" data-i18n="">Projects Package</span>
          </a>
          <ul class="menu-content">
            <li class="">
              <a href="createprojectpackage">
                <i class="feather icon-pocket"></i>
                <span class="menu-title" data-i18n="">Create Project Package</span>
              </a>
            </li>
            <li class="">
              <a href="viewprojectpackage">
                <i class="feather icon-pocket"></i>
                <span class="menu-title" data-i18n="">View Project Package</span>
              </a>
            </li>
            <li class="">
              <a href="updateproject">
                <i class="feather icon-pocket"></i>
                <span class="menu-title" data-i18n="">Update proect</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#">
            <i class="feather icon-folder"></i>
            <span class="menu-title" data-i18n="">Legal documents</span>
          </a>
          <ul class="menu-content">
            <li class="">
              <a href="addlegal">
                <i class="feather icon-folder-plus"></i>
                <span class="menu-title" data-i18n="">Add legal documents</span>
              </a>
            </li>
            <li class="">
              <a href="viewlegal">
                <i class="feather icon-folder"></i>
                <span class="menu-title" data-i18n=""
                  >View legal documents</span
                >
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="sales">
            <i class="feather icon-dollar-sign"></i>
            <span class="menu-title" data-i18n="">Sales</span>
          </a>
        </li>
        <li class="nav-item active">
          <a href="project">
            <i class="feather icon-pocket"></i>
            <span class="menu-title" data-i18n="">Project</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#">
            <i class="feather icon-zap"></i>
            <span class="menu-title" data-i18n="">Financials</span>
          </a>
          <ul class="menu-content">
            <li class="">
              <a href="history">
                <i class=""></i>
                <span class="menu-title" data-i18n="">History</span>
              </a>
            </li>
            <li class="">
              <a href="projection">
                <i class=""></i>
                <span class="menu-title" data-i18n="">Projection</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="legal">
            <i class="feather icon-folder"></i>
            <span class="menu-title" data-i18n="">Legal</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="ticket">
            <i class="feather icon-mail"></i>
            <span class="menu-title" data-i18n="">Ticket</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="full">
            <i class="feather icon-settings"></i>
            <span class="menu-title" data-i18n="">Settings</span>
          </a>
        </li>
        <li class="nav-item">
         <router-link :to="{ name: 'userboard' }" class="nav-link" v-if="user_type == 0"> Hi, {{name}}</router-link>
        </li>
        <li class="nav-item">
         <router-link :to="{ name: 'admin' }" class="nav-link" v-if="user_type == 1"> Hi, {{name}}</router-link>
        </li>
      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->

  <!-- BEGIN: Content-->
  <div class="app-content content">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <nav
      class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-light navbar-shadow"
    >
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div
              class="mr-auto float-left bookmark-wrapper d-flex align-items-center"
            >
              <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu d-xl-none mr-auto">
                  <a
                    class="nav-link nav-menu-main menu-toggle hidden-xs"
                    href="#"
                    ><i class="ficon feather icon-menu"></i
                  ></a>
                </li>
              </ul>
              <ul class="nav navbar-nav bookmark-icons">
                <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                <!--     i.ficon.feather.icon-menu-->
                <li class="nav-item d-none d-lg-block">
                  <a
                    class="nav-link"
                    href="#"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Content Layout"
                    ><i class="ficon feather icon-sidebar"></i
                  ></a>
                </li>
                <li class="nav-item d-none d-lg-block">
                  <a
                    class="nav-link"
                    href="/full"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Full Layout"
                    ><i class="ficon feather icon-file-text"></i
                  ></a>
                </li>
              </ul>
              <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link bookmark-star"
                    ><i class="ficon feather icon-star warning"></i
                  ></a>
                  <div class="bookmark-input search-input">
                    <div class="bookmark-input-icon">
                      <i class="feather icon-search primary"></i>
                    </div>
                    <input
                      class="form-control input"
                      type="text"
                      placeholder="Explore Vuesax..."
                      tabindex="0"
                      data-search="laravel-starter-list"
                    />
                    <ul class="search-list"></ul>
                  </div>
                  <!-- select.bookmark-select-->
                  <!--   option 1-Column-->
                  <!--   option 2-Column-->
                  <!--   option Static Layout-->
                </li>
              </ul>
            </div>
            <ul class="nav navbar-nav float-right">
             <li class="nav-item d-none d-lg-block">
               <router-link :to="{ name: 'login' }" class="nav-link" v-if="!isLoggedIn">Login</router-link>
              </li>
               <li class="nav-item d-none d-lg-block">
                <router-link :to="{ name: 'register' }" class="nav-link" v-if="!isLoggedIn">Register</router-link>
              </li>
              <li class="dropdown dropdown-language nav-item">
                <a
                  class="dropdown-toggle nav-link"
                  id="dropdown-flag"
                  href="#"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><i class="flag-icon flag-icon-us"></i
                  ><span class="selected-language">English</span></a
                >
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <a class="dropdown-item" href="#" data-language="en"
                    ><i class="flag-icon flag-icon-us"></i> English</a
                  ><a class="dropdown-item" href="#" data-language="fr"
                    ><i class="flag-icon flag-icon-fr"></i> French</a
                  ><a class="dropdown-item" href="#" data-language="de"
                    ><i class="flag-icon flag-icon-de"></i> German</a
                  ><a class="dropdown-item" href="#" data-language="pt"
                    ><i class="flag-icon flag-icon-pt"></i> Portuguese</a
                  >
                </div>
              </li>
              <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-expand"
                  ><i class="ficon feather icon-maximize"></i
                ></a>
              </li>
              <li class="nav-item nav-search">
                <a class="nav-link nav-link-search"
                  ><i class="ficon feather icon-search"></i
                ></a>
                <div class="search-input">
                  <div class="search-input-icon">
                    <i class="feather icon-search primary"></i>
                  </div>
                  <input
                    class="input"
                    type="text"
                    placeholder="Explore Vuesax..."
                    tabindex="-1"
                    data-search="starter-list"
                  />
                  <div class="search-input-close">
                    <i class="feather icon-x"></i>
                  </div>
                  <ul class="search-list"></ul>
                </div>
              </li>
              <li class="dropdown dropdown-notification nav-item">
                <a
                  class="nav-link nav-link-label"
                  href="#"
                  data-toggle="dropdown"
                  ><i class="ficon feather icon-bell"></i
                  ><span class="badge badge-pill badge-primary badge-up"
                    >5</span
                  ></a
                >
                <ul
                  class="dropdown-menu dropdown-menu-media dropdown-menu-right"
                >
                  <li class="dropdown-menu-header">
                    <div class="dropdown-header m-0 p-2">
                      <h3 class="white">5 New</h3>
                      <span class="grey darken-2">App Notifications</span>
                    </div>
                  </li>
                  <li class="scrollable-container media-list">
                    <!-- a(href='javascript:void(0)').d-flex.justify-content-between-->
                    <!--   .d-flex.align-items-start-->
                    <!--       i.feather.icon-plus-square-->
                    <!--       .mx-1-->
                    <!--         .font-medium.block.notification-title New Message-->
                    <!--         small Are your going to meet me tonight?-->
                    <!--   small 62 Days ago-->
                    <a
                      class="d-flex justify-content-between"
                      href="javascript:void(0)"
                    >
                      <div class="media d-flex align-items-start">
                        <div class="media-left">
                          <i
                            class="feather icon-plus-square font-medium-5 primary"
                          ></i>
                        </div>
                        <div class="media-body">
                          <h6 class="primary media-heading">
                            You have new order!
                          </h6>
                          <small class="notification-text">
                            Are your going to meet me tonight?</small
                          >
                        </div>
                        <small>
                          <time
                            class="media-meta"
                            datetime="2015-06-11T18:29:20+08:00"
                            >9 hours ago</time
                          ></small
                        >
                      </div>
                    </a>
                    <a
                      class="d-flex justify-content-between"
                      href="javascript:void(0)"
                    >
                      <div class="media d-flex align-items-start">
                        <div class="media-left">
                          <i
                            class="feather icon-download-cloud font-medium-5 success"
                          ></i>
                        </div>
                        <div class="media-body">
                          <h6 class="success media-heading red darken-1">
                            99% Server load
                          </h6>
                          <small class="notification-text"
                            >You got new order of goods.</small
                          >
                        </div>
                        <small>
                          <time
                            class="media-meta"
                            datetime="2015-06-11T18:29:20+08:00"
                            >5 hour ago</time
                          ></small
                        >
                      </div>
                    </a>
                    <a
                      class="d-flex justify-content-between"
                      href="javascript:void(0)"
                    >
                      <div class="media d-flex align-items-start">
                        <div class="media-left">
                          <i
                            class="feather icon-alert-triangle font-medium-5 danger"
                          ></i>
                        </div>
                        <div class="media-body">
                          <h6 class="danger media-heading yellow darken-3">
                            Warning notifixation
                          </h6>
                          <small class="notification-text"
                            >Server have 99% CPU usage.</small
                          >
                        </div>
                        <small>
                          <time
                            class="media-meta"
                            datetime="2015-06-11T18:29:20+08:00"
                            >Today</time
                          ></small
                        >
                      </div>
                    </a>
                    <a
                      class="d-flex justify-content-between"
                      href="javascript:void(0)"
                    >
                      <div class="media d-flex align-items-start">
                        <div class="media-left">
                          <i
                            class="feather icon-check-circle font-medium-5 info"
                          ></i>
                        </div>
                        <div class="media-body">
                          <h6 class="info media-heading">Complete the task</h6>
                          <small class="notification-text"
                            >Cake sesame snaps cupcake</small
                          >
                        </div>
                        <small>
                          <time
                            class="media-meta"
                            datetime="2015-06-11T18:29:20+08:00"
                            >Last week</time
                          ></small
                        >
                      </div>
                    </a>
                    <a
                      class="d-flex justify-content-between"
                      href="javascript:void(0)"
                    >
                      <div class="media d-flex align-items-start">
                        <div class="media-left">
                          <i
                            class="feather icon-file font-medium-5 warning"
                          ></i>
                        </div>
                        <div class="media-body">
                          <h6 class="warning media-heading">
                            Generate monthly report
                          </h6>
                          <small class="notification-text"
                            >Chocolate cake oat cake tiramisu marzipan</small
                          >
                        </div>
                        <small>
                          <time
                            class="media-meta"
                            datetime="2015-06-11T18:29:20+08:00"
                            >Last month</time
                          ></small
                        >
                      </div>
                    </a>
                  </li>
                  <li class="dropdown-menu-footer">
                    <a
                      class="dropdown-item p-1 text-center"
                      href="javascript:void(0)"
                      >Read all notifications</a
                    >
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item">
                <a
                  class="dropdown-toggle nav-link dropdown-user-link"
                  href="#"
                  data-toggle="dropdown"
                >
                  <div class="user-nav d-sm-flex d-none">
                    <span class="user-name text-bold-600">Smith Sisanmi</span
                    ><span class="user-status">Available</span>
                  </div>
                  <span
                    ><img
                      class="round"
                      :src="'/images/portrait/small/avatar-s-11.jpeg'"
                      alt="avatar"
                      height="40"
                      width="40"
                  /></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#"
                    ><i class="feather icon-user"></i> Edit Profile</a
                  ><a class="dropdown-item" href="#"
                    ><i class="feather icon-mail"></i> My Inbox</a
                  ><a class="dropdown-item" href="#"
                    ><i class="feather icon-check-square"></i> Task</a
                  ><a class="dropdown-item" href="#"
                    ><i class="feather icon-message-square"></i> Chats</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"
                    ><i class="feather icon-power"></i> Logout</a
                  >
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h2 class="content-header-title float-left mb-0">Projects</h2>
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">
                      Home
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    Projects
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div
          class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none"
        >
          <div class="form-group breadcrum-right">
            <div class="dropdown">
              <button
                class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle"
                type="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="feather icon-settings"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Chat</a
                ><a class="dropdown-item" href="#">Email</a
                ><a class="dropdown-item" href="#">Calendar</a>
              </div>
            </div>
          </div>
        </div>
      <!-- END: Header-->
      </div>
      <div class="content-body">
      <component :is="activeComponent"></component>
      </div>
    </div>
  </div>
  <!-- End: Content-->
  </div>
</template>
<script>
export default {
  data() {
    return {
      name: null,
      user_type: 0,
      isLoggedIn: localStorage.getItem("bigStore.jwt") != null,
    };
  },
  mounted() {
    this.setDefaults();
  },
  methods: {
    setDefaults() {
      if (this.isLoggedIn) {
        let user = JSON.parse(localStorage.getItem("bigStore.user"));
        this.name = user.name;
        this.user_type = user.is_admin;
      }
    },
    change() {
      this.isLoggedIn = localStorage.getItem("bigStore.jwt") != null;
      this.setDefaults();
    },
    logout() {
      localStorage.removeItem("bigStore.jwt");
      localStorage.removeItem("bigStore.user");
      this.change();
      this.$router.push("/");
    },
  },
};
</script>

