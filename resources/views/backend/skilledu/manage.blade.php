@extends('backend.master')
@section('content')
    <div class="container-fluid">
          <h2 class="text-center">Add Skills Experience & Education</h2>
        <table class="table table-bordered unique-table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>ShoetDes</th>
                    <th>Html</th>
                    <th>Css</th>
                    <th>Bootstrap</th>
                    <th>JavaScript</th>
                    <th>jQuery</th>
                    <th>Ajax</th>
                    <th>Php</th>
                    <th>PhpOop</th>
                    <th>Laravel</th>
                    <th>RestApi</th>
                    <th>webDeDes</th>
                    <th>Exyear</th>
                    <th>Excompany</th>
                    <th>Degree</th>
                    <th>Degyear</th>
                    <th>Instiute</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="skilldata">

            </tbody>
        </table>
    </div>
@endsection

{{-- Modal edit --}}
<div class="modal fade" id="eduedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-lg modal-sm">
        <div class="modal-content" style="background-color: rgb(68, 207, 241)">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Skill_Exp_Education</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="card">
          <div class="p-4 card-body">
              <h3 class="card-title text-center">Add Skills Experience & Education</h3>
               <hr/>
              <div class="mt-4 form-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="text-center">Skills Add Form</h5>
                           <div class="p-4 border rounded border-3">
                                 <div class="row g-3">
                                    <div class="col-md-12">
                                        <label for="inputPrice" class="form-label">Short Des</label>
                                   <textarea name="" id=""  col="1" class="form-control shortdes" rows="1"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPrice" class="form-label">Html</label>
                                        <input name="selling_price"  type="text" class="form-control html" id="inputPrice"
                                            placeholder="Html">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="quantity" class="form-label">Css</label>
                                        <input name="quantity" type="text" class="form-control css" id="quantity"
                                            placeholder="css">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product_code" class="form-label">Bootstrap</label>
                                        <input name="product_code" type="text" class="form-control bootstrap" id="product_code"
                                            placeholder="bootstrap">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product_code" class="form-label">JavaScript</label>
                                        <input name="product_code" type="text" class="form-control js" id="product_code"
                                            placeholder="js">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product_code" class="form-label">jQuery</label>
                                        <input name="product_code" type="text" class="form-control jquery" id="product_code"
                                            placeholder="jQuery">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product_code" class="form-label">Ajax</label>
                                        <input name="product_code" type="text" class="form-control ajax" id="product_code"
                                            placeholder="ajax">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product_code" class="form-label">Php</label>
                                        <input name="product_code" type="text" class="form-control php" id="product_code"
                                            placeholder="php">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product_code" class="form-label">Php Oop</label>
                                        <input name="product_code" type="text" class="form-control php_oop" id="product_code"
                                            placeholder="Php Oop">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPrice" class="form-label">Laravel</label>
                                        <input name="discount_price" type="text" class="form-control laravel" id="inputPrice"
                                            placeholder="laravel">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPrice" class="form-label">Rest Api</label>
                                        <input name="selling_price" type="text" class="form-control restapi" id="inputPrice"
                                            placeholder="restapi">
                                    </div>
                                    <div class="col-12 mt-5">

                                </div>
                                </div>
                            </div>
                          </div>
                           <div class="col-lg-6">
                           <h5 class="text-center">Exprences Add Form</h5>
                         <div class="p-5 border rounded border-3">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="quantity" class="form-label">Web Developer/Designer</label>
                                    <input name="quantity" type="text" class="form-control webdevdes" id="quantity"
                                        placeholder="Web Developer/Designer">
                                </div>
                                <div class="col-md-12">
                                    <label for="product_code" class="form-label">Year To Year</label>
                                    <input name="product_code" type="text" class="form-control exyear" id="product_code"
                                        placeholder="2021-2023">
                                </div>
                                <div class="col-md-12">
                                    <label for="product_code" class="form-label">Company</label>
                                    <input name="product_code" type="text" class="form-control excompany" id="product_code"
                                        placeholder="Work Company">
                                </div>
                              </div>
                                <div class="col-12 mt-5">

                            </div>
                         </div>
                         <h5 class="text-center">Education Add Form</h5>
                         <div class="p-4 border rounded border-3">
                            <div class="row g-3">
                            <div class="col-md-12">
                                    <label for="quantity" class="form-label">Degree</label>
                                    <input name="quantity" type="text" class="form-control degree" id="quantity"
                                        placeholder="jsc,ssc,hsc,bsc,msc,etc">
                                </div>
                                <div class="col-md-12">
                                    <label for="product_code" class="form-label">Year To Year</label>
                                    <input name="product_code" type="text" class="form-control degyear" id="product_code"
                                        placeholder="2021-2023">
                                </div>
                                <div class="col-md-12">
                                    <label for="product_code" class="form-label">Institute</label>
                                    <input name="product_code" type="text" class="form-control instiute" id="product_code"
                                        placeholder="School,Collage,University">
                                </div>
                                </div>

                            </div>

                         </div>
                    </div>

             </div>
        </div>
    </div>

             </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a type="submit" class="btn btn-danger updateskill">Update</a>
            </div>
        </div>
    </div>
</div>
