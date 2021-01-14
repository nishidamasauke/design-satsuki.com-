     <!--#header-->
     <header>
          <div class="inner">
               <h1 class="logo"><a href="/"></a><img src="/common/img/titlelogo.png" alt="SATSUKI design factory"></h1>
               <nav>
                    <ul>
                         <li><a href="/">TOP</a></li>
                         <li><a href="/service/">Service</a></li>
                         <li><a href="/works/">Works</a></li>
                         <li><a href="/about/">About</a></li>
                         <li><a href="/contact/">Contact</a></li>
                    </ul>
               </nav>
                <?php if ( wp_is_mobile() ) : ?>
                 <div id="nav-drawer">
                     <input id="nav-input" type="checkbox" class="nav-unshown">
                     <label id="nav-open" for="nav-input"><span></span></label>
                     <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                     <div id="nav-content">
                         <nav>
                              <ul>
                                   <li><a href="/">TOP</a></li>
                                   <li><a href="/service/">Service</a></li>
                                   <li><a href="/works/">Works</a></li>
                                   <li><a href="/about/">About</a></li>
                                   <li><a href="/contact/">Contact</a></li>
                              </ul>
                         </nav>
                     </div>
                 </div>
                 <?php endif; ?>
          </div>
     </header>
     <!--/#header-->