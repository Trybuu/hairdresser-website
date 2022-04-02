<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reaktime Chat App | From CdoingNepal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last name">
                    </div>
                </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter new password">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="field image">
                        <label>Select image</label>
                        <input type="file">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Already signed up? <a href="#">Login now</a></div>
        </section>
    </div>
    <script src="js/pass-show-hide.js"></script>
</body>
</html>