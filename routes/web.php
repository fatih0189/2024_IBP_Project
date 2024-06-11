<?php
use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::middleware('auth')->group(function () {
    Route::get('/admin/panel', function () {
        return view('admin_panel');
    })->name('admin_panel');

    Route::get('/User/panel', function () {
        $userId = 1;
        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($userId) {
            $query->where('sender_id', $userId)->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        return view('kullanici_panel', compact('messages'));
    })->name('user_panel');
});
Route::get('/home', [Controller::class, 'home'])->name('home');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/login', [Controller::class, 'loginPost'])->name('login.post');
Route::get('/registration', [Controller::class, 'registration'])->name('registration');
Route::post('/registration', [Controller::class, 'registrationPost'])->name('registration.post');
Route::get('/forgot_my_password', [Controller::class, 'forgot_my_password'])->name('forgot_my_password');
Route::post('/forgot_my_password', [Controller::class, 'forgot_my_passwordPost'])->name('forgot_my_password.post');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');
Route::get('/addUser', [Controller::class, 'addUser'])->name('addUser');
Route::post('/addUser', [Controller::class, 'addUserPost'])->name('addUser.post');
Route::get('/Userupdate', [Controller::class, 'updateUser'])->name('updateUser');
Route::post('/Userupdate', [Controller::class, 'updateUserPost'])->name('updateUser.post');
Route::get('/deleteUser', [Controller::class, 'deleteUser'])->name('deleteUser');
Route::post('/deleteUser', [Controller::class, 'deleteUserPost'])->name('deleteUser.post');
Route::get('/showallUsers', [Controller::class, 'showAllUsers'])->name('showAllUsers');
Route::get('/addCoffee', [Controller::class, 'addCoffee'])->name('addCoffee');
Route::post('/addCoffee', [Controller::class, 'addCoffeePost'])->name('addCoffee.post');
Route::get('/Coffeeupdate', [Controller::class, 'updateCoffee'])->name('updateCoffee');
Route::post('/Coffeeupdate', [Controller::class, 'updateCoffeePost'])->name('updateCoffee.post');
Route::get('/deleteCoffee', [Controller::class, 'deleteCoffee'])->name('deleteCoffee');
Route::post('/deleteCoffee', [Controller::class, 'deleteCoffeePost'])->name('deleteCoffee.post');
Route::get('/showallCoffees', [Controller::class, 'showAllCoffees'])->name('showAllCoffees');
Route::get('/addReport', [Controller::class, 'addReport'])->name('addReport');
Route::post('/addReport', [Controller::class, 'addReportPost'])->name('addReport.post');
Route::get('/editlastReport', [Controller::class, 'editLastReport'])->name('editLastReport');
Route::post('/editlastReport', [Controller::class, 'editLastReportPost'])->name('editLastReport.post');
Route::get('/showallReports', [Controller::class, 'showAllReports'])->name('showAllReports');
Route::get('/messages', [Controller::class, 'messages'])->name('messages');
Route::post('/messages', [Controller::class, 'messagesPost'])->name('messages.post');
Route::get('/chat', [Controller::class, 'messageChat'])->name('messageChat');
Route::post('/chat', [Controller::class, 'messageChatPost'])->name('messageChat.post');
Route::post('/homechat', [Controller::class, 'messageChatHomePost'])->name('messageChatHome.post');
Route::get('/usermessages', [Controller::class, 'usermessages'])->name('usermessages');
Route::post('/usermessages', [Controller::class, 'usermessagesPost'])->name('usermessages.post');
// Route::get('/userchat', [Controller::class, 'usermessageChat'])->name('usermessageChat');
// Route::post('/userchat', [Controller::class, 'usermessageChatPost'])->name('usermessageChat.post');
Route::get('/usershowallReports', [Controller::class, 'usershowAllReports'])->name('usershowAllReports');
Route::get('/userchat', [Controller::class, 'userChat'])->name('userChat');
Route::post('/userchat', [Controller::class, 'userChatPost'])->name('userChatPost.post');
Route::get('/duyurular', [Controller::class, 'userReports'])->name('userReports');
Route::post('/duyurular', [Controller::class, 'userReportsPost'])->name('userReports.post');
