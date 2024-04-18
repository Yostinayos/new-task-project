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
    allUsers-GET : 'api/admin/empolyees'->adminController->view('empolyees-list');
    showUser-GET : 'api/admin/empolyees/empolyeeID'->adminController->view('empolyee');
    pickEmpolyeeRole-GET : 'api/admin/empolyees/empolyeeID/edit'->adminController->view('empolyee-form');
    pickEmpolyeeRole-put : 'api/admin/empolyees/empolyeeID'->adminController->redirect('edit-empolyee');

# }



