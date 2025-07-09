<?php
include_once('./header.php');
?>

<section class="section">
            <div class="columns is-vcentered is-centered">
                <div class="column is-half-tablet">
                    <form method="post" action="#">
                        <h2 class="mb-4 is-size-4-mobile is-uppercase has-text-weight-semibold has-text-centered has-text-link">Login</h2>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input
                                    class="input"
                                    type="email"
                                    placeholder="Email"
                                />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>

                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input
                                    class="input"
                                    type="password"
                                    placeholder="Password"
                                />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button class="button is-link is-uppercase is-fullwidth">Login</button>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <span>Create an account</span>
                                <a class="is-link has-text-link" href="./register.php">Register ?</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

<?php
include_once('./footer.php');
?>
