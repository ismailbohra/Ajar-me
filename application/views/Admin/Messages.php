<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: darkgrey;
        color: black;
    }

    .center {
        margin-left: 250px;
        padding: 5rem;
    }

    .heading {
        margin-bottom: 3rem;
    }
</style>


<div class="center">

    <h1 class="heading">Messages</h1>
    <table id="customers">
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact No.</th>
            <th>Messages</th>
            <th>Date/Time</th>
        </tr>

        <?php $i = 1;
        foreach ($messages as $message): ?>
            <tr>
                <td>
                    <?php echo $i ?>
                </td>
                <td>
                    <?php echo $message['name'] ?>
                </td>
                <td>
                    <a href="mailto:john.smith@email.com">
                        <?php echo $message['email'] ?>
                    </a>
                </td>
                <td>
                    <?php echo $message['contact'] ?>
                </td>
                <td>
                    <?php echo $message['message'] ?>
                </td>
                <td>
                    <?php echo $message['timestamp'] ?>
                </td>
            </tr>
            <?php $i++; endforeach; ?>



    </table>
</div>