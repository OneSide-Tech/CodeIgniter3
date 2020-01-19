<!-- hooking navbar -->
<?php include_once(APPPATH.'/views/layouts/navbar.php')?>
<!-- view record page -->

<div class="container" style="margin-top: 100px" >
    <h2 class="text-center">Records</h2>
    <a href="<?php echo base_url('blog/index'); ?>" class="btn btn-primary">ADD NEW</a>
    <table class="table table-bordered table-responsive table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Author Name</th>
        <th scope="col">Category</th>
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            if($blog){
                foreach($blog as $blog){
                    
        ?>
        <tr>
        <th scope="<?php echo $blog->id; ?>"><?php echo $blog->id; ?></ht>
        <td><?php echo $blog->bpauthor; ?></td>
        <td><?php echo $blog->bpcategory; ?></td>
        <td><?php echo $blog->bptitle; ?></td>
        <td><?php echo $blog->bpdate; ?></td>
        <td><?php echo $blog->message; ?></td>
        <td> 
            <a href="<?php echo base_url('blog/edit/'.$blog->id);?>" class="btn btn-success">EDIT</a>
            <a href="<?php echo base_url('blog/delete/'.$blog->id); ?>" class="btn btn-danger">DELETE</a>
        </td>
        </tr>
        
        <?php 
            }
        }
        ?>
    </tbody>
    </table>
</div>