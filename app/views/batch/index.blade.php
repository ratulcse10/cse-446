@extends('layouts.default')

@section('content')
	<div class="col-md-12">
		@include('includes.alert')
		<section class="panel">
                          <header class="panel-heading">
                              {{ $title }}
                              <a href="" class='btn btn-primary pull-right'>
								<span class="glyphicon glyphicon-plus"></span> Add New Batch
							</a>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th>Name</th>
                                  
                  
                                 
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              	@foreach($batches as $batch)
									<tr>
										
										<td>{{ $batch->name }}</td>
										
										<td>
	                                   	<a href="" class='btn btn-success'>
		        						<span class="glyphicon glyphicon-edit"></span> Edit
		        						</a>
		        						<a href="#" class="btn btn-danger deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteBatchYear="">
			        					<span class="glyphicon glyphicon-trash"></span> Delete
			        					</a>
                                   		</td>
									</tr>
								@endforeach
                              
                              
                              
                              
                              </tbody>
                          </table>
        <div class="text-center">{{ $batches->links() }}</div>
        </section>
	
	</div>

	<!-- Modal -->
	<div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	  	<div class="modal-dialog">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        	<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
		      	</div>
		      	<div class="modal-body">
					Are you sure to delete this batch?
		      	</div>
		      	<div class="modal-footer">
		        	{{ Form::open(array('route' => array('batch', 0), 'method'=> 'delete', 'class' => 'deleteForm')) }}
		        		<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
		        		{{ Form::submit('Yes, Delete', array('class' => 'btn btn-success')) }}
		        	{{ Form::close() }}
		      	</div>
	    	</div>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		
		// delete a batch
		$('.deleteBtn').click(function() {
			var deleteBatchYear = $(this).attr('deleteBatchYear');
			var url = "<?php echo URL::route('batch'); ?>";
			$(".deleteForm").attr("action", url+'/'+deleteBatchYear);
		});
	});
	</script>

@stop