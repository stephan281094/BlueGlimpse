<div class="bg section noselect">
    <div class="bg content">
        <div class="bg grid">
            <div class="sixteen cell">
                <div class="bg block">
                    <div class="title">
                        Welkom to the CMS of BlueGlimpse!
                    </div>
                    <div class="content">
                        Here is a quick overview:<br />
                        <?php
                        foreach ($this->users as $users) {
                            foreach ($this->posts as $posts) {
                                echo 'We currently have ' . $users['count'] . ' users ';
                                echo 'and ' . $posts['count'] . ' posts.';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="five cell">
                <div class="bg block">
                    <div class="title">
                        Create user
                    </div>
                    <div class="content">
                        <form action="index/create" method="post">
                            <div class="bg field">
                                <div class="title">Username </div>
                                <input class="rounded" type="text" name="username" placeholder="Username">
                            </div>
                            <div class="bg field">
                                <div class="title">Email Address</div>
                                <input class="rounded" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="bg field">
                                <div class="title">Password </div>
                                <input class="rounded" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="bg field">
                                <div class="title">Level </div>
                                <select class="rounded" name="level">
                                    <option value="default">default</option>
                                    <option value="admin">admin</option>
                                    <option value="creator">creator</option>
                                </select>
                            </div>
                            <input class="bg left blue button" type="submit" value="submit">
                        </form>
                    </div>
                </div>
            </div>