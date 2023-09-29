<div data-simplebar class="h-100">
	<!--- Sidemenu -->
	<div id="sidebar-menu">
		<!-- Left Menu Start -->
		<ul class="metismenu list-unstyled" id="side-menu">
			<li class="menu-title">General</li>

			<li>
				<a href="{{route('admin_dashboard')}}" class="waves-effect">
					<i class="bx bx-home-circle"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				 <a href="{{route('home.homepage')}}" target="_blank" class="waves-effect"> 
		
					<i class='bx bx-globe'></i>
					<span>Website</span>
				</a>
				
			</li>


            <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Master</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						<li><a href="{{route('view_menu')}}">Menu</a></li>
						<li><a href="{{route('view_subnmenu')}}">Sub Menu</a>
							<li><a href="{{route('view_class')}}">Class</a></li>
						<li><a href="{{route('view_section')}}">Section</a></li>
					</ul>
			
			   </li>

			
			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Pages</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						<li><a href="{{route('create_page')}}">Create Page</a></li>
						<li><a href="{{route('page_content')}}">Page Content</a></li>
					   
					</ul>
			
			</li>


            <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Home</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						<li><a href="{{route('view_home_slider')}}">Home Slider</a></li>
						<li><a href="{{route('whyus_page')}}">Home Sections</a></li>
						<li><a href="{{route('view_facilities_expert')}}">Facilities Expert Services</a></li>	
					    <li><a href="{{route('view_facilities')}}">Facilities Slider</a></li>	
					    <li><a href="{{route('view_coachings')}}">Life at snkkv</a></li>
					    <li><a href="{{route('view_testimonials')}}">Testimonials</a></li>	
						<li><a href="{{route('view_knowledge_home')}}">Coachings</a></li>
								
						<li><a href="{{route('view_membership')}}">Memebership</a></li>	


					
					</ul>
			
			</li>



			  <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Facilities</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						
				<li><a href="{{route('view_curricular_facility')}}">Curricular Facilities</a></li>
				<li><a href="{{route('view_cocurricular_facility')}}">Cocurricular Facilities</a></li>
			  </ul>
			
			   </li>

	    <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Members of Trust</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						
				<li><a href="{{route('view_memberof_trust')}}">Members of Trust</a></li>
				<li><a href="{{route('view_view_commitee_members')}}">Committee Members</a></li>
			  </ul>
			
			   </li>		   


          <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>News</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						
						<li><a href="{{route('view_boardmembers')}}">News Events</a></li>
						<li><a href="{{route('view_news')}}"> Students in Headline</a></li>
					   
					</ul>
			
			</li>



			
			 <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Staff</span>
				</a>
					
			  <ul class="sub-menu" aria-expanded="false">
						<li><a href="{{route('view_department')}}">Department</a></li>
						<li><a href="{{route('view_staff')}}">View Staff</a></li>
					   
					</ul>
			
			</li>



         <li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-image-add'></i>
					<span>Gallery</span>
				</a>
				
				
					<ul class="sub-menu" aria-expanded="false">
						<li><a href="{{route('view_category')}}">Category</a></li>
						<li><a href="{{route('manage_gallery')}}">Manage Gallery</a></li>
						
					</ul>
					
				
			</li>

			<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-file'></i>
					<span>Blog</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="{{route('add_blog')}}">Add Blog</a></li>
					<li><a href="{{route('manage_blog')}}">Manage Blog</a></li>
				</ul>
			</li>

		<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-file'></i>
					<span>Widget</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="{{route('add_widget')}}">Add Widgets</a></li>
					
				</ul>
			</li>		
			
			
			<li class="menu-title">Search Engine Optimization</li>
			<li>
				<a href="javascript: void(0);" class="has-arrow waves-effect">
					<i class='bx bx-line-chart'></i>
					<span>SEO Markups</span>
				</a>
				<ul class="sub-menu" aria-expanded="false">
					<li><a href="{{route('manage_metadata')}}">Meta Details</a></li>
					<li><a href="{{route('manage_snippets')}}">Header Snippets</a></li>
					<li><a href="{{route('manage_footer_snippets')}}">Footer Snippets</a></li>
				</ul>
			</li>
			

		</ul>
	</div>
	<!-- Sidebar -->
</div>