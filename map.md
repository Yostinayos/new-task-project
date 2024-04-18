# routes and view for auth {
    register-GET : 'api/auth/register'->view('register-form');
    register-post : 'api/auth/register'->registerController->redirect('home-user');
    login-GET : 'api/auth/login'->view('login-form');
    login-post : 'api/auth/login'->loginController->redirect('home-user');
# }

# routes and view for user {
    profile-GET : 'api/profiles/userID'->view('profile-user');
    profile-GET : 'api/profiles/userID/create'->view('profile-form');
    createProfile-post : 'api/profiles'->profileController->redirect('profile-user');
    profile-GET : 'api/profiles/userID/edit'->view('profile-form');
    updateProfile-put : 'api/profiles/userID'->profileController->redirect('profile-user');
    allUsers-GET : 'api/admin/users'->adminController->view('users-list');
    showUser-GET : 'api/admin/users/userID'->adminController->view('user');
    pickUSerRole-GET : 'api/admin/users/userID/edit'->adminController->view('edit-user');
    pickUSerRole-put : 'api/admin/users/userID'->adminController->redirect('edit-user');

# }



