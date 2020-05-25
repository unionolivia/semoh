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
            <h2 class="brand-text mb-0">
            	<router-link :to="{name: 'home'}">1000homes</router-link> 
            </h2>
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
       
      </ul>
    </div>
  </div>
        </div>
    </template>
    <script>
    export default {
        data() {
            return {
                name: null,
                user_type: 0,
                isLoggedIn: localStorage.getItem('bigStore.jwt') != null
            }
        },
        mounted() {
            this.setDefaults()
        },
        methods : {
            setDefaults() {
                if (this.isLoggedIn) {
                    let user = JSON.parse(localStorage.getItem('bigStore.user'))
                    this.name = user.name
                    this.user_type = user.is_admin
                }
            },
            change() {
                this.isLoggedIn = localStorage.getItem('bigStore.jwt') != null
                this.setDefaults()
            },
            logout(){
                localStorage.removeItem('bigStore.jwt')
                localStorage.removeItem('bigStore.user')
                this.change()
                this.$router.push('/')
            }
        }
    }
    </script>
