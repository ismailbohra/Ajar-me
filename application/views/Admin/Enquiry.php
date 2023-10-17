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

    <h1 class="heading">Enquirey</h1>

    <table id="customers">
        <tr>
            <th>S.No.</th>
            <th>Date</th>
            <th>Type</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact No.</th>
            <th>Requirements</th>
            <th>product</th>
            <th>Company</th>
            <th>Postal Address</th>
        </tr>
        <?php $i = 1;
        foreach ($enquires as $enquiry) { ?>
            <tr>
                <td>
                    <?php echo $i ?>
                </td>
                <td>
                    <?php echo $enquiry['timestamp']; ?>
                </td>
                <td>
                    <?php echo $enquiry['user'] ?>
                </td>
                <td>
                    <?php echo $enquiry['name'] ?>
                </td>
                <td>
                    <a href="mailto:jane.doe@email.com">
                        <?php echo $enquiry['email'] ?>
                    </a>
                </td>
                <td>
                    <?php echo $enquiry['contact'] ?>
                </td>
                <td>
                    <?php echo $enquiry['requirements'] ?>
                </td>
                <td>
                    <a href='<?php echo base_url('admin/view_product/'.$enquiry['product_id']) ?>'>
                        <?php echo $enquiry['product_id'] ?>
                    </a>
                </td>
                <td>
                    <?php echo $enquiry['company'] ?>
                </td>
                <td>
                    <?php echo $enquiry['address'] ?>
                </td>
            </tr>
            <?php $i++;
        } ?>
    </table>
</div>