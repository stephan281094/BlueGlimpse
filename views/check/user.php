<div class="bg section noselect">
    <div class="bg content">
        <div class="bg grid">
            <?php foreach ($this->output as $key => $value): ?>
            <div class="sixteen cell">
                <div class="bg block">
                    <div class="title">
                        <?php echo 'Info about user '.$value['username']; ?>
                    </div>
                    <div class="content">
                        <form action="updateuser" method="post">
                            <input class="hidden" type="text" name="id" value="<?php echo $value['id']; ?>">
                            <div class="two cell">
                                <div class="bg field">
                                    <div class="title">
                                        Username: 
                                    </div>
                                    <input class="rounded" type="text" name="username" value="<?php echo $value['username']; ?>">
                                </div>
                            </div>
                            <div class="three cell">
                                <div class="bg field">
                                    <div class="title">
                                        Email: 
                                    </div>
                                    <?php echo $value['email']; ?>
                                </div>
                            </div>
                            <div class="two cell">
                                <div class="bg field">
                                    <div class="title">
                                        Registration date: 
                                    </div>
                                    <?php echo $value['registration_date']; ?>
                                </div>
                            </div>
                            <div class="one cell">
                                <div class="bg field">
                                    <div class="title">
                                        Activated: 
                                    </div>
                                    <select class="rounded" name="activated">
                                        <option value="0" <?php echo ($value['activated']  == "0" ? "selected='selected'" : "") ?>>No</option>
                                        <option value="1" <?php echo ($value['activated'] == "1" ? "selected='selected'" : "") ?>>Yes</option>
                                    </select>
                                </div>
                            </div>
                            <div class="two cell">
                                <div class="bg field">
                                    <div class="title">
                                        Last activate: 
                                    </div>
                                    <?php echo $value['last_active']; ?>
                                </div>
                            </div>
                            <div class="one cell">
                                <div class="bg field">
                                    <div class="title">
                                        Level: 
                                    </div>
                                    <select class="rounded" name="level">
                                        <option value="default" <?php echo ($value['level']  == "default" ? "selected='selected'" : "") ?>>default</option>
                                        <option value="admin" <?php echo ($value['level'] == "admin" ? "selected='selected'" : "") ?>>admin</option>
                                        <option value="creator" <?php echo ($value['level'] == "creator" ? "selected='selected'": "") ?>>creator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="one cell">
                                <input class="bg left blue button" type="submit" value="submit">
                            </div>
                        </form>
                        <form action="deleteuser" method="post">
                            <div class="one cell">
                                <div class="bg field">
                                    <input class="hidden" type="text" name="id" value="<?php echo $value['id']; ?>">
                                    <input class="hidden" type="text" name="username" value="<?php echo $value['username']; ?>">
                                    <input class="bg left red button" type="submit" value="Delete">
                                </div>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
            <?php endforeach;?>
        