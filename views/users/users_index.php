<h3>Users</h3>
<ul class="list-group">
    <table class="table table-bordered" id="sortTable">
        <thead>
            <tr >
                <th id="fullname">Full name</th>
                <th id="username">Username</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($users as $user): ?>
            <tr>
                <td class="fullname"><?= $user['full_name'] ?></td>
                <td class="username"><?= $user['username'] ?></td>
            </tr>
            <? endforeach ?>
        </tbody>

    </table>
</ul>

<?php if ($auth->is_admin): ?>
    <h3>Add new user</h3>

    <form method="post" id="form">

        <table class="table table-bordered">
            <tr>
                <th>Username</th>
                <td><input type="text" name="data[username]" placeholder="Jaan"/></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="data[password]" placeholder="******"/></td>
            </tr>
            <tr>
                <th>Active</th>
                <td><input type="checkbox"
                           name="data[active]" checked="checked"/>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="data[email]" placeholder="em@ail.ee">
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>

    </form>
<?php endif; ?>
