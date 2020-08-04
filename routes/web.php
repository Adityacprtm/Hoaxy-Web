<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/welcome', function () {
	return view('welcome');
});

Route::middleware(['auth'])->group(function () {
	Route::get('/approval', 'Auth\ApprovalController@index')->name('approval');

	Route::middleware(['verified'])->group(function () {

		Route::middleware(['approved'])->group(function () {
			Route::get('/home', 'HomeController@index')->name('home');

			// Route Manage
			Route::get('/manage', 'Manage\DashboardController@index')->name('manage');

			// Route Manage User
			Route::get('/manage/user/profile', 'Manage\UserController@profile')->name('manage.user.profile');
			Route::get('/manage/user/setting', 'Manage\UserController@setting')->name('manage.user.setting');

			/* BLOG ROUTE */
			Route::get('/manage/blog', 'Manage\BlogController@index')->name('manage.blog');
			Route::get('/manage/blog/add', 'Manage\BlogController@blogAdd')->name('manage.blog.add');
			Route::post('/manage/blog/add/image', 'Manage\BlogController@blogUploadImage')->name('manage.blog.upload.image');
			Route::get('/manage/blog/edit/{id}', 'Manage\BlogController@blogEdit')->name('manage.blog.edit');
			Route::post('/manage/blog/update', 'Manage\BlogController@blogStore')->name('manage.blog.update');
			Route::post('/manage/blog/delete', 'Manage\BlogController@blogDestroy')->name('manage.blog.delete');
		});

		Route::middleware(['admin'])->group(function () {

			/* USERS ROUTE */
			Route::get('/manage/users', 'Manage\UserController@index')->name('admin.manage.users');
			Route::get('/manage/users/{user_id}/approve', 'Manage\UserController@approve')->name('admin.manage.users.approve');
			Route::post('/manage/users/update', 'Manage\UserController@store')->name('admin.manage.users.update');
			Route::post('/manage/users/delete', 'Manage\UserController@destroy')->name('admin.manage.users.delete');

			/* ABOUT ROUTE */
			Route::get('/manage/about', 'Manage\AboutController@index')->name('manage.about.me');
			Route::post('/manage/about/update', 'Manage\AboutController@aboutUpdate')->name('manage.about.me.update');
			Route::get('/manage/about/doing', 'Manage\AboutController@doing')->name('manage.about.doing');
			Route::get('/manage/about/client', 'Manage\AboutController@client')->name('manage.about.client');
			Route::post('/manage/about/client/update', 'Manage\AboutController@clientStore')->name('manage.about.client.update');
			Route::post('/manage/about/client/delete', 'Manage\AboutController@clientDestroy')->name('manage.about.client.delete');

			/* RESUME ROUTE */
			Route::get('/manage/resume', 'Manage\ResumeController@index')->name('manage.resume.index');
			Route::get('/manage/resume/education', 'Manage\ResumeController@education')->name('manage.resume.education');
			Route::post('/manage/resume/education/update', 'Manage\ResumeController@educationStore')->name('manage.resume.education.update');
			Route::post('/manage/resume/education/delete', 'Manage\ResumeController@educationDestroy')->name('manage.resume.education.delete');
			Route::get('/manage/resume/experience', 'Manage\ResumeController@experience')->name('manage.resume.experience');
			Route::post('/manage/resume/experience/update', 'Manage\ResumeController@experienceStore')->name('manage.resume.experience.update');
			Route::post('/manage/resume/experience/delete', 'Manage\ResumeController@experienceDestroy')->name('manage.resume.experience.delete');
			Route::get('/manage/resume/skill', 'Manage\ResumeController@skill')->name('manage.resume.skill');
			Route::post('/manage/resume/skill/update', 'Manage\ResumeController@skillStore')->name('manage.resume.skill.update');
			Route::post('/manage/resume/skill/delete', 'Manage\ResumeController@skillDestroy')->name('manage.resume.skill.delete');
			Route::get('/manage/resume/code-skill', 'Manage\ResumeController@codeSkill')->name('manage.resume.codeskill');
			Route::post('/manage/resume/code-skill/update', 'Manage\ResumeController@codeSkillStore')->name('manage.resume.codeskill.update');
			Route::post('/manage/resume/code-skill/delete', 'Manage\ResumeController@codeSkillDestroy')->name('manage.resume.codeskill.delete');

			/* PORTFOLIO ROUTE */
			Route::get('/manage/portfolio', 'Manage\PortfolioController@index')->name('manage.portfolio.index');
			Route::post('/manage/portfolio/update', 'Manage\PortfolioController@portfolioStore')->name('manage.portfolio.update');
			Route::post('/manage/portfolio/delete', 'Manage\PortfolioController@portfolioDestroy')->name('manage.portfolio.delete');
			Route::get('/manage/portfolio/category', 'Manage\PortfolioController@category')->name('manage.portfolio.category');
			Route::get('/manage/portfolio/getcategory', 'Manage\PortfolioController@getCategory')->name('manage.portfolio.category.get');
			Route::post('/manage/portfolio/category/update', 'Manage\PortfolioController@categoryStore')->name('manage.portfolio.category.update');
			Route::post('/manage/portfolio/category/delete', 'Manage\PortfolioController@categoryDestroy')->name('manage.portfolio.category.delete');

			/* CONTACT ROUTE */
			Route::get('/manage/contact', 'Manage\ContactController@index')->name('manage.contact');
			Route::post('/manage/contact/update', 'Manage\ContactController@contactStore')->name('manage.contact.update');
			Route::post('/manage/contact/delete', 'Manage\ContactController@contactDestroy')->name('manage.contact.delete');

			/* INFO ROUTE */
			Route::get('/manage/info', 'Manage\InfoController@index')->name('manage.info');
			Route::post('/manage/info/update', 'Manage\InfoController@infoStore')->name('manage.info.update');
			Route::post('/manage/info/delete', 'Manage\InfoController@infoDestroy')->name('manage.info.delete');
		});
	});
});

// Route main
Route::get('/', 'Main\HomeController@about')->name('home');
Route::get('/about', 'Main\HomeController@about')->name('about');
Route::get('/resume', 'Main\HomeController@resume')->name('resume');
Route::get('/portfolio', 'Main\HomeController@portfolio')->name('portfolio');
Route::get('/blog', 'Main\HomeController@blog')->name('blog');
Route::get('/blog/{slug}', 'Main\HomeController@blogDetail')->name('blog.detail');
Route::get('/contact', 'Main\HomeController@contact')->name('contact');
Route::post('/contact', 'Main\HomeController@contactStore')->name('contact.store');

// Route Mbeb
Route::view('/mbeb', 'mbeb.index')->name('mbeb');

// Route old v1
Route::view('/old/v1', 'old.v1.index')->name('old.v1');

// Route old v2
Route::view('/old/v2', 'old.v2.index')->name('old.v2');
