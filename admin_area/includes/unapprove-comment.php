<!-- START PAGE CONTENT-->
<div class="page-heading">
   <h1 class="page-title">View comments</h1>
</div>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php?dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">View comments</li>
   </ol>
</nav>

<?php if (isset($_SESSION['product_update_msg'])): ?>
   <div class="row">
      <div class="col-md-8 offset-md-2">
         <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['product_update_msg'];
            unset($_SESSION['product_update_msg']); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
      </div>
   </div>
<?php endif ?>

<?php if (isset($_SESSION['delete_product_msg'])): ?>
   <div class="row">
      <div class="col-md-8 offset-md-2">
         <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['delete_product_msg'];
            unset($_SESSION['delete_product_msg']); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
      </div>
   </div>
<?php endif ?>




<div class="page-content fade-in-up">
   <div class="ibox rounded">
      <div class="ibox-head bg-light">
         <div class="ibox-title"><i class="fas fa-list-ul"></i> comments List</div>
      </div>
      <div class="ibox-body">
         <table class="table table-bordered table-hover table-responsive-lg" id="example-table" cellspacing="0" width="100%">
            <thead class="bg-light">
               <tr>
                  <th>comment ID</th>
                  <th>name</th>
                  <th>comment</th>

                  <th>date</th>
                  <th>email</th>

                  <th>Status</th>
                  <th>Accept</th>
                  <th>Delete</th>
               </tr>
            </thead>
            <tfoot>
               <tr></tr>
            </tfoot>
            <tbody>
               <?php

               $view_comments = $getFromU->viewAllFromTable('tblcomments');
               foreach ($view_comments as $view_comment) {
                  $id = $view_comment->id;
                  $name = $view_comment->name;
                  $comment = $view_comment->comment;
                  $email = $view_comment->email;
                  $postingDate = $view_comment->postingDate;
                  $postid = $view_comment->postId;
                  $status = $view_comment->status;
                  $product_sold = $getFromU->countFromTableByCommentID('tblcomments', $id);
                  if ($status == "0") {


               ?>

                     <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $comment; ?></td>
                        <td><?php echo htmlentities($postingDate); ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo ucwords($status); ?></td>
                        <td>
                           <a class="text-info" onclick="Acceptcomment('<?php echo $id; ?>')"><i class="fas fa-check-circle"></i> Accept</a>
                        </td>
                        <td>
                           <a class="text-danger" onclick="Deletecomment('<?php echo $id; ?>')"><i class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                     </tr>

               <?php }
               } ?>

            </tbody>
         </table>
      </div>
   </div>
</div>


<!-- CORE PLUGINS, Must Need-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- PAGE LEVEL SCRIPTS-->
<script>
   $(function() {
      $('#example-table').DataTable({
         pageLength: 10,
      });
   });
</script>