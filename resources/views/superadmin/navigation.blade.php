<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="ai-icon" href="/dashboard" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-plus"></i>
							<span class="nav-text">Create</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/create/platform">Platforms</a></li>

                            <li><a href="/create/user">Users</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">List</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Platforms</a></li>
                            <li><a href="./chart-morris.html">Users</a></li>

                        </ul>
                    </li>
                </ul>
				<div class="add-menu-sidebar">
					{{qrcode(Auth::user()->name)}}<br>
					<p class="	font-w500 mb-0">{{Auth::user()->name}}</p>
				</div>
				<div class="copyright">
					<p><strong>Identity Management</strong> © 2021 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by Wallace</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
