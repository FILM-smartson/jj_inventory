  <div class="modal fade" id="delete-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <div class="container">
                      <form method="post" action="process/delete_product_process.php">
                        <input type="hidden" id="product_id" name="product_id">
                        <div class="row">
                        	<div class="col-md-12">
                        		<p>Are you sure you want to delete this product?</p>
                        	</div>
                        </div>

                         <!-- Submit button -->
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-danger" name="submit-delete-product">Delete</button>
                          </div>
                        </div>
                      </form>
                    </div>    
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
  
        <script>
	        //Get data for update category  
	        $('#delete-product').on('show.bs.modal', function (event) {
	          var button = $(event.relatedTarget) // Button that triggered the modal
	          var product_id = button.data('product_id');
	          var modal = $(this)
	          modal.find('.modal-body #product_id').val(product_id);
	        });
      	</script>

   