<div id="modal_theme_info" class="modal" tabindex="-1">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header bg-info">
											<h3 class="modal-title">Add Details</h3>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<div class="card-body">
											<p>
												We'll forecast your revenue based on your entries. Consider how you want to enter your products. You can enter a total revenue amount for your entire company; or enter by product categories; or enter each individual product.
											</p>

											<p style="padding-right: 10px; background-color: gray;">
												You can revise these entries after you enter them by clicking each row in the Product & Sales table.
											</p>
											<form action="#" id="UpdateProductService">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Product or Service Name</label>
															<input type="text" name="service_name" value="{{@PRODUCT_SERVICE.service_name}}" class="form-control" required/>
														</div>
													</div>

													<div class="col-md-3">

													</div>

													<div class="col-md-2">
														<div class="form-group">
															<label>List Order</label>
															<input type="text" name="list_order" value="{{@PRODUCT_SERVICE.list_order}}" class="form-control" placeholder="1" required/>
														</div>
													</div>

												</div>


												<p>Is this a product or service?</p>

												<div class="row">
													<div class="col-md-2">
														<div class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="product_service" value="Product" id="custom_radio_stacked_unchecked" checked>
															<label class="custom-control-label" for="custom_radio_stacked_unchecked">Product</label>
														</div>
													</div>
													<div class="col-md-10">
														<p>Products are usually physical items that require purchasing or manufacturing to add them to your inventory.</p>
													</div>

												</div>

												<div class="row">
													<div class="col-md-2">

														<div class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="product_service" value="Service" id="custom_radio_stacked_checked">
															<label class="custom-control-label" for="custom_radio_stacked_checked">Service</label>
														</div>

													</div>

													<div class="col-md-10">
														<p>Services are not usually physical items and don't generally require inventory.</p>
													</div>

												</div>

												<p>How do you want to forecast sales for this item?</p>

												<div class="row">
													<div class="col-md-4">
													</div>
													<div class="col-md-8">
														<p>
															Switching these settings after you've entered <br/> data will reset your numbers to "0" for this item.
														</p>
													</div>

												</div>

												<div class="row">
													<div class="col-md-4">

														<div class="form-check">
															<label class="form-check-label">
																<input type="radio" name="revenue_unitSold" value="By Revenue" class="form-check-input-styled-primary" checked data-fouc>
																<p data-popup="popover" data-placement="top" title="By Revenue" data-trigger="hover"
																   data-content="Forecasting by Revenue is easier than forecasting by Units Sold because you don't need to input detailed information. You'll only input the total amount of revenue expected for each item. You won't be able to track inventory with this option.">
																	By Revenue <i class="fa fa-question-circle-o mr-2"></i>
																</p>
															</label>
														</div>

													</div>
													<div class="col-md-8">
														<p>
															It's easier to forecast by revenue only because we won't ask you for the number of units you expect to sell. Inventory won't be tracked.
														</p>
													</div>

												</div>

												<div class="row">
													<div class="col-md-4">

														<div class="form-check">
															<label class="form-check-label">
																<input type="radio" name="revenue_unitSold" value="By Units Sold" class="form-check-input-styled-danger" data-fouc>
																<p data-popup="popover" data-trigger="hover" data-placement="top" title="By Units Sold" data-content="Forecasting by Units Sold is harder because you'll need to estimate the number of units you expect to sell, how much you plan to charge and your cost to manufacture or purchase each unit.
																	Including these details allows for inventory tracking.">
																	By Units Sold <i class="fa fa-question-circle-o mr-2"></i>
																</p>
															</label>
														</div>

													</div>
													<div class="col-md-8">
														<p>
															Forecasting by units sold is harder, but your financial forecasts will be more accurate. We'll ask you to enter the number of units you plan to sell and we'll include inventory in your financial forecasts.
														</p>
													</div>

												</div>

												<div class="modal-footer">
													<button type="button" class="btn bg-info" data-toggle="modal" data-target="#modal_theme_update1">Next <i class="icon-paperplane ml-2"></i></button>

												</div>

												<!-- Info modal -->
												<div id="modal_theme_update1" class="modal" tabindex="-1">
													<div class="modal-dialog modal-lg">
														<div class="modal-content">
															<div class="modal-header bg-info">
																<h3 class="modal-title">Add Details</h3>
																<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div>

															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<h5>How much revenue do you expect from this item?</h5>
																	</div>
																</div>

																<div class="row">
																	<div class="col-md-3">
																		<h5>Year One</h5>
																		<p style="font-size:11px;">Annual Marketing Expense</p>
																		<div class="form-group">
																			<input type="text" id="prod" value="{{@PRODUCT_SALE.year_sale}}" name="year_sale1"
																				   class="form-control"
																				   placeholder="0.00">
																		</div>
																	</div>

																	<input type="hidden"  name="y1" class="form-control" value="y1">
																	<input type="hidden"  name="y2" class="form-control" value="y2">
																	<input type="hidden"  name="y3" class="form-control" value="y3">
																	<div class="col-md-9">
																		<div class="row">
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month1</label>
																					<input type="text" id="ps0" name="month1"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month1}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month2</label>
																					<input type="text" id="ps1" name="month2"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month2}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month3</label>
																					<input type="text" id="ps2" name="month3"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month3}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month4</label>
																					<input type="text" id="ps3" name="month4"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month4}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month5</label>
																					<input type="text" id="ps4" name="month5"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month5}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month6</label>
																					<input type="text" id="ps5" name="month6"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month6}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																		</div>

																		<div class="row">
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month7</label>
																					<input type="text" id="ps6" name="month7"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month7}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month8</label>
																					<input type="text" id="ps7" name="month8"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month8}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month9</label>
																					<input type="text" id="ps8" name="month9"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month9}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month10</label>
																					<input type="text" id="ps9" name="month10"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month10}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month11</label>
																					<input type="text" id="ps10" name="month11"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month11}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month12</label>
																					<input type="text" id="ps11" name="month12"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month12}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>

																<div class="row">
																	<div class="col-md-3">
																		<h5>Year Two</h5>
																		<p style="font-size:11px;">Annual Marketing Expense</p>
																		<div class="form-group">
																			<input type="text" id="prod2" value="{{@PRODUCT_SALE.year_sale}}" name="year_sale2"
																				   class="form-control"
																				   placeholder="0.00">
																		</div>
																	</div>

																	<div class="col-md-9">
																		<div class="row">
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month13</label>
																					<input type="text" id="pp0" name="month13"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month13}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month14</label>
																					<input type="text" id="pp1" name="month14"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month14}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month15</label>
																					<input type="text" id="pp2" name="month15"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month15}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month16</label>
																					<input type="text" id="pp3" name="month16"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month16}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month17</label>
																					<input type="text" id="pp4" name="month17"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month17}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month18</label>
																					<input type="text" id="pp5" name="month18"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month18}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																		</div>

																		<div class="row">
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month19</label>
																					<input type="text" id="pp6" name="month19"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month19}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month20</label>
																					<input type="text" id="pp7" name="month20"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month20}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month21</label>
																					<input type="text" id="pp8" name="month21"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month21}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month22</label>
																					<input type="text" id="pp9" name="month22"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month22}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month23</label>
																					<input type="text" id="pp10" name="month23"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month23}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month24</label>
																					<input type="text" id="pp11" name="month24"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month24}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																		</div>
																	</div>
																</div>

																<div class="row">
																	<div class="col-md-3">
																		<h5>Year Three</h5>
																		<p style="font-size:11px;">Annual Marketing Expense</p>
																		<div class="form-group">
																			<input type="text" id="prod3" value="{{@PRODUCT_SALE.year_sale}}" name="year_sale3"
																				   class="form-control"
																				   placeholder="0.00">
																		</div>
																	</div>

																	<div class="col-md-9">
																		<div class="row">
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month25</label>
																					<input type="text" id="ppp0" name="month25"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month25}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month26</label>
																					<input type="text" id="ppp1" name="month26"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month26}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month27</label>
																					<input type="text" id="ppp2" name="month27"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month27}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month28</label>
																					<input type="text" id="ppp3" name="month28"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month28}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month29</label>
																					<input type="text" id="ppp4" name="month29"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month29}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month30</label>
																					<input type="text" id="ppp5" name="month30"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month30}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																		</div>

																		<div class="row">
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month31</label>
																					<input type="text" id="ppp6" name="month31"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month31}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month32</label>
																					<input type="text" id="ppp7" name="month32"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month32}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month33</label>
																					<input type="text" id="ppp8" name="month33"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month33}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month34</label>
																					<input type="text" id="ppp9" name="month34"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month34}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month55</label>
																					<input type="text" id="ppp10" name="month35"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month35}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="form-group">
																					<label>Month36</label>
																					<input type="text" id="ppp11" name="month36"
																						   class="form-control"
																						   value="{{@PRODUCT_SALE.month36}}"
																						   placeholder="0.00" {{@var1}}>
																				</div>
																			</div>

																		</div>
																	</div>

																</div>


																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-toggle="modal">Back</button>
																	<!--	<a class="btn bg-primary ml-3 btn-rounded ladda-button" onclick="Dis.postServer('financialOwnerContribution', '/api/account/financial_owner', 'financialOwnerContributionButton', true, 'PUT')" id="financialOwnerContributionButton" type="submit" data-style="slide-up">
																			<span class="ladda-label">save <i class="icon-paperplane ml-2"></i></span>
																		</a>-->
																	<button type="button" class="btn bg-info" data-toggle="modal" data-target="#modal_theme_update2">Next <i class="icon-paperplane ml-2"></i></button>

																</div>

																<!-- Info modal -->
																<div id="modal_theme_update2" class="modal" tabindex="-1">
																	<div class="modal-dialog modal-lg">
																		<div class="modal-content">
																			<div class="modal-header bg-info">
																				<h3 class="modal-title">Add Details</h3>
																				<button type="button" class="close" data-dismiss="modal">&times;</button>
																			</div>

																			<div class="card-body">
																				<div class="row">
																					<div class="col-md-12">
																						<h5>What are your raw costs to manufacture or purchase this item?</h5>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-md-3">
																						<h5>Year One</h5>
																						<p style="font-size:11px;">Annual Marketing Expense</p>
																						<div class="form-group">
																							<input type="text" id="cost" value="{{@PRODUCT_COST.year_cost}}" name="year_cost1"
																								   class="form-control"
																								   placeholder="0.00">
																						</div>
																					</div>

																					<div class="col-md-9">
																						<div class="row">
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month1</label>
																									<input type="text" id="cs0" name="month37"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month1}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month2</label>
																									<input type="text" id="cs1" name="month38"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month38}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month3</label>
																									<input type="text" id="cs2" name="month39"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month39}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month4</label>
																									<input type="text" id="cs3" name="month40"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month40}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month5</label>
																									<input type="text" id="cs4" name="month41"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month41}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month6</label>
																									<input type="text" id="cs5" name="month42"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month42}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																						</div>

																						<div class="row">
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month7</label>
																									<input type="text" id="cs6" name="month43"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month43}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month8</label>
																									<input type="text" id="cs7" name="month44"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month44}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month9</label>
																									<input type="text" id="cs8" name="month45"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month45}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month10</label>
																									<input type="text" id="cs9" name="month46"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month46}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month11</label>
																									<input type="text" id="cs10" name="month47"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month47}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month12</label>
																									<input type="text" id="cs11" name="month48"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month48}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																						</div>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-md-3">
																						<h5>Year Two</h5>
																						<p style="font-size:11px;">Annual Marketing Expense</p>
																						<div class="form-group">
																							<input type="text" id="cost2" value="{{@PRODUCT_COST.year_cost}}" name="year_cost2"
																								   class="form-control"
																								   placeholder="0.00">
																						</div>
																					</div>

																					<div class="col-md-9">
																						<div class="row">
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month13</label>
																									<input type="text" id="css0" name="month49"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month49}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month14</label>
																									<input type="text" id="css1" name="month50"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month50}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month15</label>
																									<input type="text" id="css2" name="month51"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month51}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month16</label>
																									<input type="text" id="css3" name="month52"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month52}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month17</label>
																									<input type="text" id="css4" name="month53"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month53}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month18</label>
																									<input type="text" id="css5" name="month54"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month54}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																						</div>

																						<div class="row">
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month19</label>
																									<input type="text" id="css6" name="month55"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month55}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month20</label>
																									<input type="text" id="css7" name="month56"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month56}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month21</label>
																									<input type="text" id="css8" name="month57"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month57}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month22</label>
																									<input type="text" id="css9" name="month58"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month58}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month23</label>
																									<input type="text" id="css10" name="month59"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month59}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month24</label>
																									<input type="text" id="css11" name="month60"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month60}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																						</div>
																					</div>
																				</div>

																				<div class="row">
																					<div class="col-md-3">
																						<h5>Year Three</h5>
																						<p style="font-size:11px;">Annual Marketing Expense</p>
																						<div class="form-group">
																							<input type="text" id="cost3" value="{{@PRODUCT_COST.year_cost}}" name="year_cost3"
																								   class="form-control"
																								   placeholder="0.00">
																						</div>
																					</div>

																					<div class="col-md-9">
																						<div class="row">
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month25</label>
																									<input type="text" id="csss0" name="month61"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month61}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month26</label>
																									<input type="text" id="csss1" name="month62"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month62}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month27</label>
																									<input type="text" id="csss2" name="month63"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month63}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month28</label>
																									<input type="text" id="csss3" name="month64"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month64}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month29</label>
																									<input type="text" id="csss4" name="month65"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month65}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month30</label>
																									<input type="text" id="csss5" name="month66"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month66}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																						</div>

																						<div class="row">
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month31</label>
																									<input type="text" id="csss6" name="month67"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month67}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month32</label>
																									<input type="text" id="csss7" name="month68"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month68}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month33</label>
																									<input type="text" id="csss8" name="month69"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month69}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month34</label>
																									<input type="text" id="csss9" name="month70"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month70}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month55</label>
																									<input type="text" id="csss10" name="month71"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month71}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>
																							<div class="col-md-2">
																								<div class="form-group">
																									<label>Month36</label>
																									<input type="text" id="csss11" name="month72"
																										   class="form-control"
																										   value="{{@PRODUCT_COST.month72}}"
																										   placeholder="0.00" {{@var1}}>
																								</div>
																							</div>

																						</div>
																					</div>

																				</div>


																				<div class="modal-footer">
																					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

																					<a class="btn bg-primary ml-3 btn-rounded ladda-button" onclick="Dis.postServer('UpdateProductService', '/api/account/UpdateProductService/{{@PARAMS.company_id}}', 'UpdateProductServiceButton', true, 'PUT')" id="UpdateProductServiceButton" type="submit" data-style="slide-up">
																						<span class="ladda-label">Update <i class="icon-paperplane ml-2"></i></span>
																					</a>

																				</div>

																			</div>
																		</div>
																	</div>
																</div>
																<!-- /info modal -->

															</div>
														</div>
													</div>
												</div>
												<!-- /info modal -->
											</form>
										</div>
									</div>
								</div>
							</div>