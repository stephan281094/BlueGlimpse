<div class="bg section noselect">
    <div class="bg content">
        <div class="bg grid">
            <div class="sixteen cell">
                <div class="bg block">
                    <div class="title">
                        <?php echo $this->messagetitle; ?>
                    </div>
                    <div class="content">
                        <form action="updateuser" method="post">
                            <input class="hidden" type="text" name="id" value="<?php echo $this->id; ?>">
                            <div class="two cell">
                                <div class="bg field">
                                    <div class="title">
                                        Username: 
                                    </div>
                                    <input class="rounded" type="text" name="username" value="<?php echo $this->username; ?>">
                                </div>
                            </div>
                            <div class="three cell">
                                <div class="bg field">
                                    <div class="title">
                                        Email: 
                                    </div>
                                    <?php echo $this->email; ?>
                                </div>
                            </div>
                            <div class="two cell">
                                <div class="bg field">
                                    <div class="title">
                                        Registration date: 
                                    </div>
                                    <?php echo $this->regdate; ?>
                                </div>
                            </div>
                            <div class="one cell">
                                <div class="bg field">
                                    <div class="title">
                                        Activated: 
                                    </div>
                                    <input class="rounded" type="text" name="activated" value="<?php echo $this->activated; ?>">
                                </div>
                            </div>
                            <div class="two cell">
                                <div class="bg field">
                                    <div class="title">
                                        Last activate: 
                                    </div>
                                    <?php echo $this->lastactive; ?>
                                </div>
                            </div>
                            <div class="one cell">
                                <div class="bg field">
                                    <div class="title">
                                        Level: 
                                    </div>
                                    <select class="rounded" name="level">
                                        <option value="default" <?php echo ($this->level  == "default" ? "selected='selected'" : "") ?>>default</option>
                                        <option value="admin" <?php echo ($this->level == "admin" ? "selected='selected'" : "") ?>>admin</option>
                                        <option value="creator" <?php echo ($this->level == "creator" ? "selected='selected'": "") ?>>creator</option>
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
                                    <input class="hidden" type="text" name="id" value="<?php echo $this->id; ?>">
                                    <input class="hidden" type="text" name="username" value="<?php echo $this->username; ?>">
                                    <input class="bg left red button" type="submit" value="Delete">
                                </div>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        