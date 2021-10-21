  <aside class="main-sidebar">
      <!-- sidebar-->
      <section class="sidebar position-relative">
          <div class="multinav">
              <div class="multinav-scroll" style="height: 100%;">
                  <!-- sidebar menu-->
                  <ul class="sidebar-menu" data-widget="tree">
                      <li class="header">Dashboard</li>

                      <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                          <a href="{{ route('dashboard') }}">
                              <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Dashboard</span>
                          </a>
                      </li>

                      <li class="{{ Request::is('student') ? 'active' : '' }}">
                          <a href="{{ route('students') }}">
                              <i class="icon-File"><span class="path1"></span><span
                                      class="path2"></span><span class="path3"></span></i>
                              <span>Students</span>
                          </a>
                      </li>

                      <li class="{{ Request::is('payment') ? 'active' : '' }}">
                          <a href="{{ route('payments') }}">
                              <i class="icon-Chart-pie"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Payment</span>
                          </a>
                      </li>


                      <li class="{{ Request::is('invoice') ? 'active' : '' }}">
                          <a href="{{ route('invoices') }}">
                              <i class="icon-File"><span class="path1"></span><span
                                      class="path2"></span></i>
                              <span>Invoices</span>
                          </a>
                      </li>
                      

                      <li class="">
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                              <i class="icon-Chat-locked"><span class="path1"></span><span
                                      class="path2"></span></i>
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  </ul>
              </div>
          </div>
      </section>
  </aside>
