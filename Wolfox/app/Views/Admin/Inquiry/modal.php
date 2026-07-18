<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                                <div class="form-floating mb-2">
                                                                                                    <input type="text" class="form-control text-center" name="memberUsername" id="memberUsername" placeholder="Username" required>
                                                                                                    <label class="text-center" for="memberUsername">Username</label>
                                                                                                    <div class="invalid-feedback">Your Username is required</div>
                                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                        </div>
                    </div>
</div>

<script>
                    var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                    myModal.show();
</script>