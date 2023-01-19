 <ul id="dropdown1" class="dropdown-content">
     <li><a href="javascript:;">one</a></li>
     <li><a href="javascript:;">two</a></li>
     <li class="divider"></li>
     <li><a href="javascript:;">three</a></li>
 </ul>

 <ul class="sidenav" id="mobile-demo">
     <li><a href="sass.html">Sass</a></li>
     <li><a href="badges.html">Components</a></li>
     <li><a href="collapsible.html">Javascript</a></li>
     <li><a href="mobile.html">Mobile</a></li>
 </ul>

 <div class="navbar-fixed">
     <nav class="black">
         <div class="nav-wrapper">
             <a href="javascript:;" class="brand-logo"><img class="responsive-img" src="../assets/img/logo_.png" alt="logo" style="max-width: 120px;">
            </a>
             <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
             <ul class="right hide-on-med-and-down">
                 <li><a href="sass.html">Sass</a></li>
                 <li><a href="badges.html">Components</a></li>
                 <!-- Dropdown Trigger -->
                 <li><a class="dropdown-trigger" href="javascript:;" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
             </ul>
         </div>
     </nav>
 </div>