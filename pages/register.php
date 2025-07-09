<?php
session_start();

if (isset($_COOKIE['user_id']) || isset($_SESSION['user_id'])) {
  header('Location: ./home.php');
  exit();
}
include_once('./header.php');
?>

<section class="section">
    <div class="columns is-vcentered is-centered">
        <div class="column is-half-tablet">
            <form method="post" action="../php/register.php">
                <h2 class="mb-4 is-size-4-mobile is-uppercase has-text-weight-semibold has-text-centered has-text-link">Register</h2>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="text" name="name" placeholder="Full name" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input" type="email" name="email" placeholder="Email" required />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>

                    </p>
                </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="password" name="password" placeholder="Password" required/>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button class="button is-link is-uppercase is-fullwidth" type="submit" name="submit">Register</button>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <span>I want to </span>
                                <a class="is-link has-text-link" href="./login.php">Login ?</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

<?php
include_once('./footer.php');
?>
