<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pseudo</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $query="SELECT * FROM user";
        $data=fetchAll($query);
        foreach($data as $row) {
            extract($row);
        ?>
        <tr>
            <td><?php echo $user_id ?></td>
            <td><?php echo $pseudo ?></td>
            <td><?php echo $nom ?></td>
            <td><?php echo $prenom ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $role;?></td>
            <td> <a href='users.php?source=update&id=<?php echo $user_id; ?>'>
                    <img class='btn-actions' src='../images/editer.svg' alt='Editer'></a>
                <a href='users.php?delete=<?php echo $user_id; ?>'>
                    <img class='btn-actions' src='../images/supprimer.svg' alt='Supprimer'></a>
            </td>
        </tr>

        <?php } ?>
    </tbody>
</table>
