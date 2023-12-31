<?php


use App\Http\Controllers\AdminLogoutController;
use App\Http\Controllers\CkImageUploadController;
use App\Http\Controllers\LanguageController;

use App\Http\Livewire\Frontend\Home\Homepage;
use App\Http\Livewire\Frontend\Detail\DetailpageView;
use App\Http\Livewire\Frontend\Activities;
use App\Http\Livewire\Frontend\CareerCounselling;
use App\Http\Livewire\Frontend\CocurricularFacilities;
use App\Http\Livewire\Frontend\ContactUs;
use App\Http\Livewire\Frontend\CounsellingCell;
use App\Http\Livewire\Frontend\CurricularFacilities;
use App\Http\Livewire\Frontend\FoundersPhilosophy;
use App\Http\Livewire\Frontend\GalleryDetail;
use App\Http\Livewire\Frontend\Location;
use App\Http\Livewire\Frontend\MembersOfTrust;
use App\Http\Livewire\Frontend\NewsEvents;
use App\Http\Livewire\Frontend\PhotoGallery;
use App\Http\Livewire\Frontend\Societies;
use App\Http\Livewire\Frontend\StudentHeadlines;
use App\Http\Livewire\Frontend\Testimonials;
use App\Http\Livewire\Frontend\VisionAndMission;
//new page with empty blade files
use App\Http\Livewire\Frontend\AboutUs;
use App\Http\Livewire\Frontend\HistoricalFoundation;
use App\Http\Livewire\Frontend\AcademicObjectives;


use App\Http\Livewire\Backend\AdminDashboard;
use App\Http\Livewire\Backend\Admissions\AdmissionsInquery;
use App\Http\Livewire\Backend\Menu\ViewMenu;
use App\Http\Livewire\Backend\Menu\EditMenu;
use App\Http\Livewire\Backend\Menu\TrashMenu;
use App\Http\Livewire\Backend\Submenu\ViewSubMenu;
use App\Http\Livewire\Backend\Submenu\EditSubMenu;
use App\Http\Livewire\Backend\Submenu\TrashSubMenu;
use App\Http\Livewire\Backend\Master\ViewClass;
use App\Http\Livewire\Backend\Master\EditClass;
use App\Http\Livewire\Backend\Master\TrashClass;
use App\Http\Livewire\Backend\Master\ViewSection;
use App\Http\Livewire\Backend\Master\EditSection;
use App\Http\Livewire\Backend\Master\TrashSection;
use App\Http\Livewire\Backend\Faq\AddFaqsCategory;
use App\Http\Livewire\Backend\Faq\EditFaqsCategory;
use App\Http\Livewire\Backend\Blog\AddBlog;
use App\Http\Livewire\Backend\Blog\ManageBlog;
use App\Http\Livewire\Backend\Blog\EditBlog;
use App\Http\Livewire\Backend\Blog\TrashBlog;
use App\Http\Livewire\Backend\Department\ViewDepartment;
use App\Http\Livewire\Backend\Department\EditDepartment;
use App\Http\Livewire\Backend\Department\TrashDepartment;
use App\Http\Livewire\Backend\News\ViewLatestNews;
use App\Http\Livewire\Backend\News\EditLatestNews;
use App\Http\Livewire\Backend\News\TrashLatestNews;
use App\Http\Livewire\Backend\Gallery\ViewGalleryCategory;
use App\Http\Livewire\Backend\Gallery\EditGalleryCategory;
use App\Http\Livewire\Backend\Gallery\TrashGalleryCategory;
use App\Http\Livewire\Backend\Gallery\ManageGallery;
use App\Http\Livewire\Backend\Gallery\EditGallery;
use App\Http\Livewire\Backend\Gallery\TrashGallery;
use App\Http\Livewire\Backend\Gallery\ViewOurTopper;
use App\Http\Livewire\Backend\Gallery\EditOurTopper;
use App\Http\Livewire\Backend\Gallery\TrashOurTopper;
use App\Http\Livewire\Backend\Gallery\ViewKnowledgeHome;
use App\Http\Livewire\Backend\Gallery\EditKnowledgeHome;
use App\Http\Livewire\Backend\Gallery\TrashKnowledgeHome;
use App\Http\Livewire\Backend\Gallery\AddGroupPhoto;
use App\Http\Livewire\Backend\Gallery\EditGroupPhoto;
use App\Http\Livewire\Backend\Membership\ViewMembership;
use App\Http\Livewire\Backend\Membership\EditMemberShip;
use App\Http\Livewire\Backend\Membership\TrashMemberShip;
use App\Http\Livewire\Backend\Seo\FooterSnippets;
use App\Http\Livewire\Backend\Seo\HeaderSnippets;
use App\Http\Livewire\Backend\Seo\EditHeaderSnippets;
use App\Http\Livewire\Backend\Seo\Metadetails;
use App\Http\Livewire\Backend\Seo\EditMetadetails;
use App\Http\Livewire\Backend\Slider\ViewHomeSlider;
use App\Http\Livewire\Backend\Slider\EditHomeSlider;
use App\Http\Livewire\Backend\Slider\TrashHomeSlider;
use App\Http\Livewire\Backend\Whyus\WhyusPage;
use App\Http\Livewire\Backend\Whyus\EditWhyusPage;
use App\Http\Livewire\Backend\Whyus\TrashWhyusPage;
use App\Http\Livewire\Backend\Testimonials\ViewTestimonials;
use App\Http\Livewire\Backend\Testimonials\EditTestimonials;
use App\Http\Livewire\Backend\Testimonials\TrashTestimonials;
use App\Http\Livewire\Backend\Boardmembers\ViewBoardMembers;
use App\Http\Livewire\Backend\Boardmembers\EditBoardMembers;
use App\Http\Livewire\Backend\Boardmembers\TrashBoardMembers;
use App\Http\Livewire\Backend\Contact\ContactFormEntries;
use App\Http\Livewire\Backend\Contact\ViewContactFormEntry;
use App\Http\Livewire\Backend\Contact\TrashContactFormEntries;
use App\Http\Livewire\Backend\Login\AdminLogin;
use App\Http\Livewire\Backend\Pages\AddPageContent;
use App\Http\Livewire\Backend\Pages\EditPageContent;
use App\Http\Livewire\Backend\Pages\TrashPageContent;
use App\Http\Livewire\Backend\Pages\CreatePage;
use App\Http\Livewire\Backend\Pages\EditPage;
use App\Http\Livewire\Backend\Pages\ViewPageHeadings;
use App\Http\Livewire\Backend\Pages\EditPageHeadings;
use App\Http\Livewire\Backend\Pages\TrashPage;
use App\Http\Livewire\Backend\Profile\AdminProfile;
use App\Http\Livewire\Backend\Staff\ViewStaff;
use App\Http\Livewire\Backend\Staff\EditStaff;
use App\Http\Livewire\Backend\Staff\TrashStaff;
use App\Http\Livewire\Backend\Principal\Message;
use App\Http\Livewire\Backend\Principal\EditMessage;
use App\Http\Livewire\Backend\Principal\TrashMessage;
use App\Http\Livewire\Backend\Facilities\ViewFacilities;
use App\Http\Livewire\Backend\Facilities\EditFacilities;
use App\Http\Livewire\Backend\Facilities\ViewExpertServices;
use App\Http\Livewire\Backend\Facilities\EditExpertServices;
use App\Http\Livewire\Backend\Facilities\TrashFacilities;
use App\Http\Livewire\Backend\Footer\ContactusView;
use App\Http\Livewire\Backend\Footer\TrashContactus;
use App\Http\Livewire\Backend\Footer\SocialAppsManager;
use App\Http\Livewire\Backend\Footer\TrashSocialAppsManager;
use App\Http\Livewire\Backend\Footer\ViewFooterLinks;
use App\Http\Livewire\Backend\Footer\EditFooterLinks;
use App\Http\Livewire\Backend\Memories\ViewGuestBook;
use App\Http\Livewire\Backend\Memories\EditGuestBook;
use App\Http\Livewire\Backend\Memories\TrashGuestBook;
use App\Http\Livewire\Backend\Memories\ViewGrapevine;
use App\Http\Livewire\Backend\Memories\EditGrapevine;
use App\Http\Livewire\Backend\Memories\TrashGrapevine;
use App\Http\Livewire\Backend\Coachings\ViewCoachings;
use App\Http\Livewire\Backend\Coachings\EditCoachings;
use App\Http\Livewire\Backend\Coachings\TrashCoachings;

use App\Http\Livewire\Backend\Rollofhonour\AddCategory;
use App\Http\Livewire\Backend\Rollofhonour\EditCategory;
use App\Http\Livewire\Backend\Rollofhonour\SubCategory;
use App\Http\Livewire\Backend\Rollofhonour\EditSubCategory;
use App\Http\Livewire\Backend\Rollofhonour\ViewRollofhonour;
use App\Http\Livewire\Backend\Rollofhonour\EditRollofhonour;
use App\Http\Livewire\Backend\Calendar\SchoolCalendar;
use App\Http\Livewire\Backend\Calendar\EditSchoolCalendar;
use App\Http\Livewire\Backend\Calendar\ImportSchoolEvent;
use App\Http\Livewire\Backend\Document\AddDocument;
use App\Http\Livewire\Backend\Document\EditDocument;
use App\Http\Livewire\Backend\Certificate\AddTransferCertificate;
use App\Http\Livewire\Backend\Certificate\EditTransferCertificate;
use App\Http\Livewire\Backend\Faq\CreateFaq;
use App\Http\Livewire\Backend\Mandatory\MandatoryPublicDisclosure;
use App\Http\Livewire\Backend\Mandatory\ViewMandatoryPublicDisclosure;
use App\Http\Livewire\Backend\VirtualTour\ViewVirtualTour;
use App\Http\Livewire\Backend\VirtualTour\EditVirtualTour;
use App\Http\Livewire\Backend\Widget\ViewWidget;
use App\Http\Livewire\Backend\Widget\EditWidget;

use App\Http\Livewire\Backend\Facilities\CurricularFacility;
use App\Http\Livewire\Backend\Facilities\EditCurricularFacility;
use App\Http\Livewire\Backend\Facilities\CoCurricularFacility;
use App\Http\Livewire\Backend\Facilities\EditCoCurricularFacility;

use App\Http\Livewire\Backend\MemberofTrust\ViewMemberofTrust;
use App\Http\Livewire\Backend\MemberofTrust\EditMemberofTrust;

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
// https://ckeditor.com/ckeditor-4/download/?null-addons=
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// ============================= frontend route start  ====================== correct  i nblade 

Route::get('/language/english', [LanguageController::class,'english'])->name('english.language');

 Route::get('/language/gujrati', [LanguageController::class,'gujrati'])->name('gujrati.language');

// copy past code 
Route::get('/phpinfo', function (){
    dd(phpinfo());
});
Route::get('detail/page/{page_id}/{slug}', DetailpageView::class)->name('detail_page');
Route::group(['middleware' => ['check-menu-route-status']], function () {
Route::get('/', Homepage::class)->name('home.homepage');
//new pages with empty blade files
Route::get('/about-us', AboutUs::class)->name('home.about_us');
Route::get('/historical-foundation', HistoricalFoundation::class)->name('historical_foundation');
Route::get('/academic-objectives', AcademicObjectives::class)->name('academic_objectives');
Route::get('/activities', Activities::class)->name('home.activities');
Route::get('/career-counselling', CareerCounselling::class)->name('home.career_counselling');
Route::get('/cocurricular-facilities', CocurricularFacilities::class)->name('home.cocurricular_facilities');
Route::get('/curricular-facilities', CurricularFacilities::class)->name('home.curricular_facilities');
Route::get('/contact-us', ContactUs::class)->name('home.contact_us');
Route::get('/counselling-cell', CounsellingCell::class)->name('home.counselling_cell');
Route::get('/founders-philosophy', FoundersPhilosophy::class)->name('home.founders_philosophy');
Route::get('/photo-gallery', PhotoGallery::class)->name('home.gallery');
Route::get('/gallery-detail/{category_id}', GalleryDetail::class)->name('gallery_detail');
Route::get('/location', Location::class)->name('home.location');
Route::get('/members-of-trust', MembersOfTrust::class)->name('home.members_of_trust');
Route::get('/news-events', NewsEvents::class)->name('home.news_events');
Route::get('/societies', Societies::class)->name('home.societies');
Route::get('/student-headlines', StudentHeadlines::class)->name('home.student_headlines');
Route::get('/testimonials', Testimonials::class)->name('home.testimonials');
Route::get('/vision-and-mission', VisionAndMission::class)->name('home.vision_and_mission');



});



// ================ frontend route end ===============
// admin routings

include("web.admin.php");
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        return redirect()->route('admin_dashboard');
    })->name('dashboard');

});

/**********
Admin Login 
***********/
Route::group(['middleware' => ['guest']], function () {
Route::get('admin/login', AdminLogin::class)->name('admin_login');
});

/**********
Auth Routes 
***********/
Route::group(['middleware' => 'auth'],function(){
    Route::prefix('admin')->group(function(){

Route::get('/dashboard', AdminDashboard::class)->name('admin_dashboard');
Route::get('/profile', AdminProfile::class)->name('admin_profile');
Route::post('/admin-logout', [AdminLogoutController::class,'adminlogout'])->name('adminlogout');

Route::get('/view/menu', ViewMenu::class)->name('view_menu');
Route::get('/edit/menu/{id}', EditMenu::class)->name('edit_menu');

Route::get('/view/submenu', ViewSubMenu::class)->name('view_subnmenu');
Route::get('/edit/submenu/{id}', EditSubMenu::class)->name('edit_sub_menu');

Route::get('/view/class', ViewClass::class)->name('view_class');
Route::get('/edit/class/{id}', EditClass::class)->name('edit_class');
Route::get('/view/section', ViewSection::class)->name('view_section');
Route::get('/edit/section/{id}', EditSection::class)->name('edit_section');

Route::post('ckeditor/image_upload', [CkImageUploadController::class, 'upload'])->name('image.upload');
Route::get('/git-status', [CkImageUploadController::class, 'showGitStatus'])->name('git.status');

Route::get('/view/slider', ViewHomeSlider::class)->name('view_home_slider');
Route::get('/edit/slider/{id}', EditHomeSlider::class)->name('edit_home_slider');

Route::get('/common/section', WhyusPage::class)->name('whyus_page');
Route::get('/common/section/{id}', EditWhyusPage::class)->name('edit_whyus_page');

Route::get('/view/membership', ViewMembership::class)->name('view_membership');
Route::get('/edit/membership/{id}', EditMemberShip::class)->name('edit_membership');

Route::get('/view/testimonials', ViewTestimonials::class)->name('view_testimonials');
Route::get('/edit/testimonials/{id}', EditTestimonials::class)->name('edit_testimonials');

Route::get('/view/life-at-ankkv', ViewCoachings::class)->name('view_coachings');
Route::get('/edit/coachings/{id}', EditCoachings::class)->name('edit_coachings');

Route::get('/view/category', ViewGalleryCategory::class)->name('view_category');
Route::get('/edit/category/{id}', EditGalleryCategory::class)->name('edit_category');

Route::get('/view/latestnews', ViewLatestNews::class)->name('view_news');
Route::get('/edit/latestnews/{id}', EditLatestNews::class)->name('edit_news');

Route::get('/manage/gallery', ManageGallery::class)->name('manage_gallery');
Route::get('/edit/gallery/{id}', EditGallery::class)->name('edit_gallery');

Route::get('/view/knowledge-home', ViewKnowledgeHome::class)->name('view_knowledge_home');
 Route::get('/edit/knowledge-home/{id}', EditKnowledgeHome::class)->name('edit_knowledge_home');

Route::get('/add/blog', AddBlog::class)->name('add_blog');
Route::get('/manage/blog', ManageBlog::class)->name('manage_blog');
Route::get('/edit/blog/{id}', EditBlog::class)->name('edit_blog');

Route::get('/manage/seo', Metadetails::class)->name('manage_metadata');
Route::get('/edit/seo/{id}', EditMetadetails::class)->name('edit_metadata');

Route::get('/header/snippets', HeaderSnippets::class)->name('manage_snippets');
 Route::get('/edit/header/snippets/{id}', EditHeaderSnippets::class)->name('edit_snippets');
Route::get('/footer/snippets', FooterSnippets::class)->name('manage_footer_snippets');

Route::get('/page/content', AddPageContent::class)->name('page_content');
 Route::get('/page/content/edit/{id}', EditPageContent::class)->name('edit_content');

Route::get('/create/page', CreatePage::class)->name('create_page');
Route::get('/edit/page/{id}', EditPage::class)->name('edit_page');
 
Route::get('/view/department', ViewDepartment::class)->name('view_department');
Route::get('/edit/department/{id}', EditDepartment::class)->name('edit_department');

Route::get('/view/staff', ViewStaff::class)->name('view_staff');
Route::get('/edit/staff/{id}', EditStaff::class)->name('edit_staff');

Route::get('/view/boardmembers', ViewBoardMembers::class)->name('view_boardmembers');
Route::get('/edit/boardmembers/{id}', EditBoardMembers::class)->name('edit_boardmembers');
     
Route::get('/view/facilities', ViewFacilities::class)->name('view_facilities');
Route::get('/edit/facilities/{id}', EditFacilities::class)->name('edit_facilities');

Route::get('/view/facilities/expert', ViewExpertServices::class)->name('view_facilities_expert');
Route::get('/edit/facilities/expert/{id}', EditExpertServices::class)->name('edit_facilities_expert'); 

Route::get('/curricular-facility', CurricularFacility::class)->name('view_curricular_facility');
Route::get('/edit/curricular-facility/{id}', EditCurricularFacility::class)->name('edit_curricular_facility');
   
Route::get('/co-curricular-facility', CoCurricularFacility::class)->name('view_cocurricular_facility');
Route::get('/edit/co-curricular-facility/{id}', EditCoCurricularFacility::class)->name('edit_cocurricular_facility');   

Route::get('/memberof-trust', ViewMemberofTrust::class)->name('view_memberof_trust');
    Route::get('/edit/memberof-trust/{id}', EditMemberofTrust::class)->name('edit_memberof_trust');

Route::get('/contact-view', ContactusView::class)->name('contact_view');

Route::get('/social-view', SocialAppsManager::class)->name('social_view');

Route::get('/footer-quick-links', ViewFooterLinks::class)->name('footer_quick_links'); 
Route::get('/edit/footer-quick-links/{id}', EditFooterLinks::class)->name('edit_footer_quick_links'); 

Route::get('/contact-entries', ContactFormEntries::class)->name('contact_entries');
Route::get('/contact-entry/{id}', ViewContactFormEntry::class)->name('contact_view_entry');

Route::get('/page/headings', ViewPageHeadings::class)->name('page_headings');
Route::get('/page/headings/edit/{id}', EditPageHeadings::class)->name('edit_page_headings');



//no use extra routes
 Route::get('/group-photos', AddGroupPhoto::class)->name('group_phptos');
      Route::get('/group-photos/{id}', EditGroupPhoto::class)->name('edit_group_phptos');

 Route::get('/ceate/message', Message::class)->name('create_message');
    Route::get('/edit/message/{id}', EditMessage::class)->name('edit_message');
    Route::get('/ceate/message/trash', TrashMessage::class)->name('trash_message');

   Route::get('/view/our-topper', ViewOurTopper::class)->name('view_our_topper');
    Route::get('/edit/our-topper/{id}', EditOurTopper::class)->name('edit_our_topper');
   Route::get('/view/our-topper/trash', TrashOurTopper::class)->name('trash_our_topper');
Route::get('/view/guest-book', ViewGuestBook::class)->name('view_guest_book');
    Route::get('/edit/guest-book/{id}', EditGuestBook::class)->name('edit_guest_book');
    Route::get('/view/guest-book/trash', TrashGuestBook::class)->name('tarsh_guest_book');

    Route::get('/view/grapevine', ViewGrapevine::class)->name('view_grapevine');
    Route::get('/edit/grapevine/{id}', EditGrapevine::class)->name('edit_grapevine');
     Route::get('/view/grapevine/trash', TrashGrapevine::class)->name('trash_grapevine');


 //  CreateFaq
 Route::get('/create-faq', CreateFaq::class)->name('admin_create_faq');
//no use
Route::get('/add-document', AddDocument::class)->name('add_document');
Route::get('/edit-document/{id}', EditDocument::class)->name('edit_document');

Route::get('/transfer-certificate', AddTransferCertificate::class)->name('transfer_certificate');
Route::get('/edit-transfer-certificate/{id}', EditTransferCertificate::class)->name('edit_transfer_certificate'); 
Route::get('/mandatory-form', MandatoryPublicDisclosure::class)->name('mandatory_form');
Route::get('/view-mandatory-form', ViewMandatoryPublicDisclosure::class)->name('view_mandatory_form');

Route::get('/virtual-tour', ViewVirtualTour::class)->name('virtual_tour');
Route::get('/edit-virtual-tour/{id}', EditVirtualTour::class)->name('edit_virtual_tour');
Route::get('/add-widget', ViewWidget::class)->name('add_widget');
Route::get('/edit-widget/{id}', EditWidget::class)->name('edit_widget');


    Route::get('/add-category', AddCategory::class)->name('add_category');
    Route::get('/edit-category/{id}', EditCategory::class)->name('edit_hcategory');


    Route::get('/add-sub-category', SubCategory::class)->name('add_sub_category');
    Route::get('/edit-sub-category/{id}', EditSubCategory::class)->name('edit_sub_category');
//no use
    Route::get('/roll-of-honour', ViewRollofhonour::class)->name('roll_of_honour');
    Route::get('/roll-of-honour/{id}', EditRollofhonour::class)->name('edit_roll_of_honour');

    Route::get('/admission-inquery', AdmissionsInquery::class)->name('admission_inquery');

    Route::get('/school-calendar', SchoolCalendar::class)->name('school_calendar');
 Route::get('/edit-school-calendar/{id}', EditSchoolCalendar::class)->name('edit_school_calendar');
   Route::get('/import-school-calendar', ImportSchoolEvent::class)->name('import_school_calendar');

   Route::get('/faqs-category', AddFaqsCategory::class)->name('faqs_category');
 Route::get('/edit-faqs-category/{id}', EditFaqsCategory::class)->name('edit_faqs_category');


});
});
