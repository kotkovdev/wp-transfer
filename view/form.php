<div class="wrap">
    <h1>Wordpress Project Transfer</h1>
    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr>
                    <th colspan="2">
                        <p class="description">
                            This plugin created for deploing wordpress websites to live hosting or moving websites to another server. <br>
                            Please, if you find bugs or have new ideas for this submit your issue <a href="https://github.com/kotkovdev/wp-transfer/issues" target="_blank">here</a>. <br/>
                            If you find and fix bugs or add new translation, please make pull-request on <a href="https://github.com/kotkovdev/wp-transfer/" target="_blank">github repository</a> page for add your changes to main plugin branch
                        </p>
                    </th>
                </tr>
                <tr>
                    <th scope="row"><label for="host">Domain name</label></th> 
                    <td>
                        <input type="text" name="host" id="host" class="regular-text" placeholder="https://example.com">
                        <button name="patch" id="patch" class="button button-primary">Patch database</button>
                        <p class="description">Using for patch database settings (if you want patch database only, press "Patch database" and download SQL file with new domain name)</p>
                    </td>
                </tr>
                <tr>
                    <th colspan="1">Database settings</th>
                </tr>
                <tr>
                    <th scope="row"><label for="db_host">Database host</label></th> 
                    <td>
                        <input type="text" name="db_host" id="db_host" class="regular-text" value="localhost">
                        <p class="description">Usually this is "localhost"</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="db_name">Database name</label></th> 
                    <td>
                        <input type="text" name="db_name" id="db_name" class="regular-text" placeholder="Database name">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="db_user">Database user</label></th> 
                    <td>
                        <input type="text" name="db_user" id="db_user" class="regular-text" placeholder="root">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="db_password">Database password</label></th> 
                    <td>
                        <input type="text" name="db_password" id="db_password" class="regular-text" placeholder="Passw0rd!">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="db_port">Database port</label></th> 
                    <td>
                        <input type="text" name="db_port" id="db_port" class="regular-text" value="3306">
                        <p class="description">Default is 3306</p>
                    </td>
                </tr>
                <tr>
                    <th colspan="1">FTP/SFTP settings</th>
                </tr>
                <tr>
                <th scope="row"><label for="ftp_type">Connection type</label></th> 
                    <td>
                        <select name="ftp_type" id="ftp_type">
                            <option value="ftp">FTP</option>
                            <option value="sftp">SFTP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="ftp_host">FTP host</label></th> 
                    <td>
                        <input type="text" name="ftp_host" id="ftp_host" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="ftp_user">FTP user</label></th> 
                    <td>
                        <input type="text" name="ftp_user" id="ftp_user" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="ftp_password">FTP password</label></th> 
                    <td>
                        <input type="text" name="ftp_password" id="ftp_password" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="ftp_port">FTP port</label></th> 
                    <td>
                        <input type="text" name="ftp_port" id="ftp_port" class="regular-text">
                        <p class="description">Default is 21 for FTP and 22 for SFTP</p>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="checkbox" name="auto_install" id="auto_install" checked> <label for="auto_install">Auto-intall on our server</label>
                        <p class="description">If you want manual install you need go to https://example.com/install.php</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Transfer project"></p>
    </form>
</div>