<?php
/**
 * Created by PhpStorm.
 * User: Thobatech
 * Date: 12/12/2018
 * Time: 11:12 AM
 */

header("Content-Type: application/json", TRUE);

class Company extends Usefulness{



	function create(Base $f3){

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$company_name = $data->company_name;
		$company_address = $data->company_address;
		$city= $data->city;
		$state_province= $data->state_province;
		$country= $data->country;
		$phone_no= $data->phone_no;
		$email= $data->email;
		$score = '0';
		$zip_code= $data->zip_code;
		$created = $this->get_time();

		if (empty($company_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Company Name is Empty';
		} elseif (empty($company_address)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Company Address is Empty';
		} elseif (empty($city)) {
				$sta = $this->statusErrorReadingResource;
				$msg = 'City is Empty';
		} elseif (empty($state_province)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'State/Province is Empty';
		} elseif (empty($country)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Country is Empty';
		} elseif (empty($phone_no)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Phone Number is Empty';
		} elseif (empty($email)) {
				$sta = $this->statusErrorReadingResource;
				$msg = 'Email Address is Empty';
		} elseif (empty($zip_code)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Zip Code is Empty';
		} else {
			$company = new companyModel($this->db);
//            $user->getByEmail($f3->get('SESSION.email'));
//            $user->getByRcc($f3->get('SESSION.rcc_no'));


			$f3->set('COMPANY.company_name', $company_name);
			$f3->set('COMPANY.company_address', $company_address);
			$f3->set('COMPANY.city', $city);
			$f3->set('COMPANY.state_province', $state_province);
			$f3->set('COMPANY.country', $country);
			$f3->set('COMPANY.phone_no', $phone_no);
			$f3->set('COMPANY.email', $email);
			$f3->set('COMPANY.score', $score);
			$f3->set('COMPANY.zip_code', $zip_code);
			$f3->set('COMPANY.created', $created);
			$f3->set('COMPANY.user_id', $f3->get('SESSION.user_id'));


			$company->add();



			$sta = $this->statusSuccess;
			$msg = 'Company Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function deleteCompany(Base $f3) {
		$s = $this->validateSession();

	//	$data = $this->getInputData();
	//	$id = $data->id;

		$id = $_GET['id'];




		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new companyModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function delete_loans(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];




		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new financialLoanModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteOwner(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new ownerInfoModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteMarket(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new marketExpenseModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteManagement(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new managementTeamModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deletePayroll(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new payrollModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteTopics(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new addTopicsModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteInvestors(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new financialInvestorModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteFinancialExpenses(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new financialExpenseModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteOtherIncomes(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new financialOtherIncomeModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteFixedAssets(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new financialFixedAssetsModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteOtherAssets(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];

		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new financialOtherAssetModel($this->db);
			$r->delete($id);

			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function deleteProductServices(Base $f3) {
		$s = $this->validateSession();

		//	$data = $this->getInputData();
		//	$id = $data->id;

		$id = $_GET['id'];


		if (empty($id)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'User ID is Missing';
		} else {
			$r = new productServiceModel($this->db);
			$r->getByProductId($id);
			$company_id= $f3->get('PRODUCT_SERVICE.company_id');
			$r->delete($id);
		for($i=0; $i<=2; $i++){
			$s = new productServiceSaleModel($this->db);
			$c = new productServiceCostModel($this->db);
			$s->delete($company_id);
			$c->delete($company_id);
		}


			$sta = $this->statusSuccess;
			$msg = 'User Delete Successfully';
		}
		$this->send($sta, $msg);
	}

	function companyLogo(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$path = $data->file;
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		$created = $this->get_time();

		if (empty($file)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'File is Empty';
		} else {
			$business = new companyLogoModel($this->db);
//            $user->getByEmail($f3->get('SESSION.email'));
//            $user->getByRcc($f3->get('SESSION.rcc_no'));

			$f3->set('FILE.file', $base64);
			$f3->set('FILE.created', $created);
			$f3->set('FILE.user_id', $f3->get('SESSION.user_id'));
			$f3->set('FILE.company_id', $id);


			$business->add();


			$sta = $this->statusSuccess;
			$msg = ' Company Logo Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function forecast(Base $f3) {
//		$s = $this->validateSession();

		$data = $this->getInputData();


		$forecast= $data->forecast;

		if (empty($forecast)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Forecast is Empty';
		} else {
			$user = new userModel($this->db);
			$user_id = $f3->get("SESSION.user_id");
			$f3->set('USER.forecast',$forecast);
			$user->edit($user_id);

			$user->save();
			$sta = $this->statusSuccess;
			$msg = 'forecast created Successfully'.$user_id;
		}

		$this->send($sta, $msg);

	}

	function pastPerformance(Base $f3){
//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');
		$sess = $this->validateSession();
		$data = $this->getInputData();

		$Revenue = $data->Revenue;
		$Net_profit = $data->Net_profit;
		$Cash_balance= $data->Cash_balance;
		$Debt= $data->Debt;
		$created = $this->get_time();

		if (empty($Revenue)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Revenue is Empty';
		} elseif (empty($Net_profit)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Net Profit is Empty';
		} elseif (empty($Cash_balance)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Cash Balance is Empty';
		} elseif (empty($Debt)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Debt is Empty';
		} else {
			$business = new pastPerformanceModel($this->db);
//            $user->getByEmail($f3->get('SESSION.email'));
//            $user->getByRcc($f3->get('SESSION.rcc_no'));

			$f3->set('PERFORMANCE.Revenue', $Revenue);
			$f3->set('PERFORMANCE.Net_profit', $Net_profit);
			$f3->set('PERFORMANCE.Cash_balance', $Cash_balance);
			$f3->set('PERFORMANCE.Debt', $Debt);
			$f3->set('PERFORMANCE.created', $created);
			$f3->set('PERFORMANCE.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PERFORMANCE.company_id', $id);

			$business->add();


			$sta = $this->statusSuccess;
			$msg = ' Past Performance Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function productSalesText(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$productSalestext= $data->productSalestext;
		$created = $this->get_time();

		if (empty($productSalestext)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Product & Sales Text is Empty';
		} else {
			$text = new productSalesTextModel($this->db);
//            $user->getByEmail($f3->get('SESSION.email'));
//            $user->getByRcc($f3->get('SESSION.rcc_no'));

			$f3->set('productSalesText.productSalestext', $productSalestext);
			$f3->set('productSalesText.created', $created);
			$f3->set('productSalesText.user_id', $f3->get('SESSION.user_id'));
			$f3->set('productSalesText.company_id', $id);


			$text->add();


			$sta = $this->statusSuccess;
			$msg = 'Product Text Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateBusinessInfo(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$start_month = $data->start_month;
		$start_year = $data->start_year;
		$legal_formation= $data->legal_formation;
		$business_in_year= $data->business_in_year;
		$business_type= $data->business_type;
		$created = $this->get_time();

		if (empty($start_month)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Start Month is Empty';
		} elseif (empty($start_year)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Start Year is Empty';
		} elseif (empty($legal_formation)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Legal Formation is Empty';
		} elseif (empty($business_in_year)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Years In Business is Empty';
		} elseif (empty($business_type)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Business Type is Empty';
		} else {
			$business = new businessInfoModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$business->getByRcc($user_id);

			$f3->set('BUSINESS.start_month', $start_month);
			$f3->set('BUSINESS.start_year', $start_year);
			$f3->set('BUSINESS.legal_formation', $legal_formation);
			$f3->set('BUSINESS.business_in_year', $business_in_year);
			$f3->set('BUSINESS.business_type', $business_type);
			$f3->set('BUSINESS.created', $created);
			$f3->set('BUSINESS.user_id', $f3->get('SESSION.user_id'));
			$f3->set('BUSINESS.company_id', $id);


			$business->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Business Information Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateOwnerInfo(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$owner_name = $data->owner_name;
		$list_order = $data->list_order;
		$year_of_experience= $data->year_of_experience;
		$credit_rating= $data->credit_rating;
		$created = $this->get_time();

		if (empty($owner_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Name of Owner is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($year_of_experience)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Of Experience is Empty';
		} elseif (empty($credit_rating)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Credit Rating is Empty';
		} else {


			$owner = new ownerInfoModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$owner->getByRcc($user_id);


			$f3->set('OWNER.owner_name', $owner_name);
			$f3->set('OWNER.list_order', $list_order);
			$f3->set('OWNER.year_of_experience', $year_of_experience);
			$f3->set('OWNER.credit_rating', $credit_rating);
			$f3->set('OWNER.created', $created);
			$f3->set('OWNER.user_id', $f3->get('SESSION.user_id'));
			$f3->set('OWNER.company_id', $id);


			$owner->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Owner Information Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialSetup(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$business_plan = $data->business_plan;
		$accounts_payable = $data->accounts_payable;
		$accounts_receivable= $data->accounts_receivable;
		$customer_percentage_credit= $data->customer_percentage_credit;
		$days= $data->days;
		$sales_percentage= $data->sales_percentage;
		$advance_pay= $data->advance_pay;
		$year1= $data->year1;
		$year2= $data->year2;
		$year3= $data->year3;
		$created = $this->get_time();

		if (empty($business_plan)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Business Plan is Empty';
		} elseif (empty($accounts_payable)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Accounts Payable is Empty';
		} elseif (empty($accounts_receivable)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Accounts Receivable is Empty';
		} elseif (empty($customer_percentage_credit)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'percentage of customers do you extend credit is Empty';
		} elseif (empty($advance_pay)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Advance Pay is Empty';
		} elseif (empty($year1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'year 1 is Empty';
		} elseif (empty($year2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'year 2 is Empty';
		} elseif (empty($year3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 3 is Empty';
		} else {
			$setup = new financialSetupModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$setup->getByRcc($user_id);

			$f3->set('SETUP.business_plan', $business_plan);
			$f3->set('SETUP.accounts_payable', $accounts_payable);
			$f3->set('SETUP.accounts_receivable', $accounts_receivable);
			$f3->set('SETUP.customer_percentage_credit', $customer_percentage_credit);
			$f3->set('SETUP.advance_pay', $advance_pay);
			$f3->set('SETUP.days', $days);
			$f3->set('SETUP.sales_percentage', $sales_percentage);
			$f3->set('SETUP.year1', $year1);
			$f3->set('SETUP.year2', $year2);
			$f3->set('SETUP.year3', $year3);
			$f3->set('SETUP.created', $created);
			$f3->set('SETUP.user_id', $f3->get('SESSION.user_id'));
			$f3->set('SETUP.company_id', $id);


			$setup->edit($user_id);

			$sta = $this->statusSuccess;
			$msg = 'Financial Setup Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialLoan(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');


		$sess = $this->validateSession();
		$data = $this->getInputData();

		$loan_name= $data->loan_name;
		$loan_type= $data->loan_type;
		$compounding= $data->compounding;
		$list_order= $data->list_order;
		$Interest_rate= $data->Interest_rate;
		$total_months= $data->total_months;
		$total_amount= $data->total_amount;
		$starting_month= $data->starting_month;
		$Year= $data->Year;
		$interest_type= $data->interest_type;

		$created = $this->get_time();

		if (empty($loan_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Loan Name is Empty';
		} elseif (empty($loan_type)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Loan Type is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($compounding)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Compounding is Empty';
		} elseif (empty($Interest_rate)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Interest Rate is Empty';
		} elseif (empty($total_months)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Total Months is Empty';
		} elseif (empty($total_amount)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Total Amount is Empty';
		} elseif (empty($starting_month)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Starting Month is Empty';
		} elseif (empty($Year)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year is Empty';
		} elseif (empty($interest_type)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Interest Type is Empty';
		} else {
			$loan = new financialLoanModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$loan->getByRcc($user_id);

			$f3->set('LOAN.loan_name', $loan_name);
			$f3->set('LOAN.loan_type', $loan_type);
			$f3->set('LOAN.list_order', $list_order);
			$f3->set('LOAN.compounding', $compounding);
			$f3->set('LOAN.Interest_rate', $Interest_rate);
			$f3->set('LOAN.total_months', $total_months);
			$f3->set('LOAN.total_amount', $total_amount);
			$f3->set('LOAN.starting_month', $starting_month);
			$f3->set('LOAN.Year', $Year);
			$f3->set('LOAN.interest_type', $interest_type);
			$f3->set('LOAN.created', $created);
			$f3->set('LOAN.user_id', $f3->get('SESSION.user_id'));
			$f3->set('LOAN.company_id', $id);


			$loan->edit($user_id);

			$sta = $this->statusSuccess;
			$msg = 'Loan Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialInvestors(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$investor_name= $data->investor_name;
		$year1= $data->year1;
		$list_order= $data->list_order;
		$year2= $data->year2;
		$year3= $data->year3;
		$created = $this->get_time();

		if (empty($investor_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Investors Name is Empty';
		} elseif (empty($year1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Loan Type is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 1 is Empty';
		} elseif (empty($year2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 2 is Empty';
		} elseif (empty($year3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 3 is Empty';
		} else {
			$investor = new financialInvestorModel($this->db);
          $user_id = $f3->get('SESSION.user_id');
			$investor->getByRcc($user_id);

			$f3->set('INVESTORS.investor_name', $investor_name);
			$f3->set('INVESTORS.year1', $year1);
			$f3->set('INVESTORS.list_order', $list_order);
			$f3->set('INVESTORS.year2', $year2);
			$f3->set('INVESTORS.year3', $year3);
			$f3->set('INVESTORS.created', $created);
			$f3->set('INVESTORS.user_id', $f3->get('SESSION.user_id'));
			$f3->set('INVESTORS.company_id', $id);


			$investor->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Investors Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialOtherIncome(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$name= $data->name;
		$year1= $data->year1;
		$list_order= $data->list_order;
		$year2= $data->year2;
		$year3= $data->year3;
		$created = $this->get_time();

		if (empty($name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Name is Empty';
		} elseif (empty($year1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 1 is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($year2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 2 is Empty';
		} elseif (empty($year3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 3 is Empty';
		} else {
			$income = new financialOtherIncomeModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$income->getByRcc($user_id);

			$f3->set('OtherIncome.name', $name);
			$f3->set('OtherIncome.year1', $year1);
			$f3->set('OtherIncome.list_order', $list_order);
			$f3->set('OtherIncome.year2', $year2);
			$f3->set('OtherIncome.year3', $year3);
			$f3->set('OtherIncome.created', $created);
			$f3->set('OtherIncome.user_id', $f3->get('SESSION.user_id'));
			$f3->set('OtherIncome.company_id', $id);


			$income->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Other Income Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialOtherAsset(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$asset_name= $data->asset_name;
		$year= $data->year;
		$list_order= $data->list_order;
		$date_acquired= $data->date_acquired;
		$cost= $data->cost;
		$created = $this->get_time();

		if (empty($asset_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Asset Name is Empty';
		} elseif (empty($year)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($date_acquired)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Date Acquired is Empty';
		} elseif (empty($cost)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'cost is Empty';
		} else {
			$asset = new financialOtherAssetModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$asset->getByRcc($user_id);

			$f3->set('OTHER_ASSETS.asset_name', $asset_name);
			$f3->set('OTHER_ASSETS.year', $year);
			$f3->set('OTHER_ASSETS.list_order', $list_order);
			$f3->set('OTHER_ASSETS.date_acquired', $date_acquired);
			$f3->set('OTHER_ASSETS.cost', $cost);
			$f3->set('OTHER_ASSETS.created', $created);
			$f3->set('OTHER_ASSETS.user_id', $f3->get('SESSION.user_id'));
			$f3->set('OTHER_ASSETS.company_id', $id);


			$asset->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Other Asset Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialFixedAsset(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$name= $data->name;
		$cost= $data->cost;
		$starting_month= $data->starting_month;
		$list_order= $data->list_order;
		$year= $data->year;
		$manufacturing= $data->manufacturing;
		$assets_type= $data->assets_type;
		$depreciated= $data->depreciated;
		$lifespan= $data->lifespan;
		$created = $this->get_time();

		if (empty($cost)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Cost is Empty';
		} elseif (empty($name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Fixed Asset Name Expense is Empty';
		} elseif (empty($starting_month)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Start Month is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($year)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year is Empty';
		} elseif (empty($assets_type)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Fixed Asset Type is Empty';
		} elseif (empty($depreciated)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Depreciated is Empty';
		} elseif (empty($lifespan)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Lifespan is Empty';
		} elseif (empty($manufacturing)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Percent Manufacturing is Empty';
		} else {
			$fixedAssets = new financialFixedAssetsModel($this->db);

			$user_id = $f3->get('SESSION.user_id');
			$fixedAssets->getByRcc($user_id);

			$f3->set('FIXED_ASSETS.name', $name);
			$f3->set('FIXED_ASSETS.cost', $cost);
			$f3->set('FIXED_ASSETS.starting_month', $starting_month);
			$f3->set('FIXED_ASSETS.list_order', $list_order);
			$f3->set('FIXED_ASSETS.year', $year);
			$f3->set('FIXED_ASSETS.manufacturing', $manufacturing);
			$f3->set('FIXED_ASSETS.assets_type', $assets_type);
			$f3->set('FIXED_ASSETS.depreciated', $depreciated);
			$f3->set('FIXED_ASSETS.lifespan', $lifespan);
			$f3->set('FIXED_ASSETS.created', $created);
			$f3->set('FIXED_ASSETS.user_id', $f3->get('SESSION.user_id'));
			$f3->set('FIXED_ASSETS.company_id', $id);


			$fixedAssets->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Fixed Asset Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateCompany(Base $f3){
		$sess = $this->validateSession();
		$data = $this->getInputData();

		$company_name = $data->company_name;
		$company_address = $data->company_address;
		$city= $data->city;
		$state_province= $data->state_province;
		$country= $data->country;
		$phone_no= $data->phone_no;
		$email= $data->email;
		$score = '0';
		$zip_code= $data->zip_code;
		$created = $this->get_time();

		if (empty($company_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Company Name is Empty';
		} elseif (empty($company_address)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Company Address is Empty';
		} elseif (empty($city)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'City is Empty';
		} elseif (empty($state_province)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'State/Province is Empty';
		} elseif (empty($country)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Country is Empty';
		} elseif (empty($phone_no)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Phone Number is Empty';
		} elseif (empty($email)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Email Address is Empty';
		} elseif (empty($zip_code)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Zip Code is Empty';
		} else {
			$company = new companyModel($this->db);
           // $company->getByEmail($f3->get('SESSION.email'));

			$email = $f3->get('SESSION.email');


			$company->getByRcc($email);


			$f3->set('COMPANY.company_name', $company_name);
			$f3->set('COMPANY.company_address', $company_address);
			$f3->set('COMPANY.city', $city);
			$f3->set('COMPANY.state_province', $state_province);
			$f3->set('COMPANY.country', $country);
			$f3->set('COMPANY.phone_no', $phone_no);
			$f3->set('COMPANY.email', $email);
			$f3->set('COMPANY.score', $score);
			$f3->set('COMPANY.zip_code', $zip_code);
			$f3->set('COMPANY.created', $created);
			$f3->set('COMPANY.user_id', $f3->get('SESSION.user_id'));

			$company->edit($email);

			$sta = $this->statusSuccess;
			$msg = 'Company Updated Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateManagement(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');
		$sess = $this->validateSession();
		$data = $this->getInputData();

		$Name = $data->Name;
		$Title = $data->Title;
		$List_order= $data->List_order;
		$TeamBio= $data->TeamBio;
		$created = $this->get_time();

		if (empty($Name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Name is Empty';
		} elseif (empty($Title)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Title is Empty';
		} elseif (empty($List_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($TeamBio)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Team Bio is Empty';
		} else {
			$management = new managementTeamModel($this->db);

			$user_id = $f3->get('SESSION.user_id');
			$management->getByRcc($user_id);

			$f3->set('MANAGEMENT.Name', $Name);
			$f3->set('MANAGEMENT.Title', $Title);
			$f3->set('MANAGEMENT.List_order', $List_order);
			$f3->set('MANAGEMENT.TeamBio', $TeamBio);
			$f3->set('MANAGEMENT.created', $created);
			$f3->set('MANAGEMENT.user_id', $f3->get('SESSION.user_id'));
			$f3->set('MANAGEMENT.company_id', $id);


			$management->edit($user_id);



			$sta = $this->statusSuccess;
			$msg = ' Management Team Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateMarketExpense(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$market_expense= $data->market_expense;
		$expense_name= $data->expense_name;
		$year1= $data->year1;
		$list_order= $data->list_order;
		$year2= $data->year2;
		$year3= $data->year3;
		$created = $this->get_time();

		if (empty($expense_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Expense Name is Empty';
		} elseif (empty($market_expense)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Market Expense is Empty';
		} elseif (empty($year1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 1 is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($year2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 2 is Empty';
		} elseif (empty($year3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 3 is Empty';
		} else {
			$expense = new marketExpenseModel($this->db);

			$user_id = $f3->get('SESSION.user_id');
			$expense->getByRcc($user_id);

			$f3->set('marketExpense.expense_name', $expense_name);
			$f3->set('marketExpense.market_expense', $market_expense);
			$f3->set('marketExpense.year1', $year1);
			$f3->set('marketExpense.list_order', $list_order);
			$f3->set('marketExpense.year2', $year2);
			$f3->set('marketExpense.year3', $year3);
			$f3->set('marketExpense.created', $created);
			$f3->set('marketExpense.user_id', $f3->get('SESSION.user_id'));
			$f3->set('marketExpense.company_id', $id);


			$expense->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Market Expense Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateMarketText(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$marketingtext= $data->marketingtext;
		$created = $this->get_time();

		if (empty($marketingtext)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Marketing Text is Empty';
		} else {
			$text = new marketTextModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$text->getByRcc($user_id);

			$f3->set('marketText.marketingtext', $marketingtext);
			$f3->set('marketText.created', $created);
			$f3->set('marketText.user_id', $f3->get('SESSION.user_id'));
			$f3->set('marketText.company_id', $id);


			$text->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Market Text Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updatePersonnelText(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$personneltext= $data->personneltext;
		$created = $this->get_time();

		if (empty($personneltext)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Personnel Text is Empty';
		} else {
			$text = new personnelTextModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$text->getByRcc($user_id);

			$f3->set('personnelText.personneltext', $personneltext);
			$f3->set('personnelText.created', $created);
			$f3->set('personnelText.user_id', $f3->get('SESSION.user_id'));
			$f3->set('personnelText.company_id', $id);


			$text->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Personnel Text Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialExpense(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$expense_name= $data->expense_name;
		$manufacturing=$data->manufacturing;
		$expense_type= $data->expense_type;
		$year1= $data->year1;
		$list_order= $data->list_order;
		$year2= $data->year2;
		$year3= $data->year3;
		$created = $this->get_time();

		if (empty($expense_type)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Expense Type is Empty';
		} elseif (empty($expense_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Expense Name is Empty';
		} elseif (empty($year1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 1 is Empty';
		} elseif (empty($manufacturing)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Manufacturing is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($year2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 2 is Empty';
		} elseif (empty($year3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 3 is Empty';
		} else {
			$expense = new financialExpenseModel($this->db);

			$user_id = $f3->get('SESSION.user_id');
			$expense->getByRcc($user_id);

			$f3->set('financialExpense.expense_name', $expense_name);
			$f3->set('financialExpense.expense_type', $expense_type);
			$f3->set('financialExpense.year1', $year1);
			$f3->set('financialExpense.manufacturing', $manufacturing);
			$f3->set('financialExpense.list_order', $list_order);
			$f3->set('financialExpense.year2', $year2);
			$f3->set('financialExpense.year3', $year3);
			$f3->set('financialExpense.created', $created);
			$f3->set('financialExpense.user_id', $f3->get('SESSION.user_id'));
			$f3->set('financialExpense.company_id', $id);


			$expense->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Financial Expense Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateAddTopics(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$section_name = $data->section_name;
		$suggested = $data->suggested;
		$List_order= $data->List_order;
		$addTopics= $data->addTopics;
		$created = $this->get_time();

		if (empty($section_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Section Name is Empty';
		} elseif (empty($suggested)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Suggested Section is Empty';
		} elseif (empty($List_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($addTopics)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Topics Text is Empty';
		} else {
			$topics = new addTopicsModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$topics->getByRcc($user_id);

			$f3->set('TOPICS.section_name', $section_name);
			$f3->set('TOPICS.suggested', $suggested);
			$f3->set('TOPICS.List_order', $List_order);
			$f3->set('TOPICS.addTopics', $addTopics);
			$f3->set('TOPICS.created', $created);
			$f3->set('TOPICS.user_id', $f3->get('SESSION.user_id'));
			$f3->set('TOPICS.company_id', $id);


			$topics->edit($user_id);

			$sta = $this->statusSuccess;
			$msg = ' Topics Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updatePayroll(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$title= $data->title;
		$year1_Salary= $data->year1_Salary;
		$year2_Salary= $data->year2_Salary;
		$year3_Salary= $data->year3_Salary;
		$list_order= $data->list_order;
		$year1_PayrollTax= $data->year1_PayrollTax;
		$year2_PayrollTax= $data->year2_PayrollTax;
		$year3_PayrollTax= $data->year3_PayrollTax;
		$year1_Percentage= $data->year1_Percentage;
		$year2_Percentage= $data->year2_Percentage;
		$year3_Percentage= $data->year3_Percentage;
		$created = $this->get_time();

		if (empty($title)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Expense Name is Empty';
		} elseif (empty($year1_Salary)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 1 Salary is Empty';
		} elseif (empty($year2_Salary)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 2 Salary is Empty';
		} elseif (empty($year3_Salary)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 3 Salary is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($year1_PayrollTax)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Payroll Tax is Empty';
		} elseif (empty($year2_PayrollTax)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Payroll Tax is Empty';
		} elseif (empty($year3_PayrollTax)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Payroll Tax is Empty';
		} elseif (empty($year1_Percentage)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Percentage of Direct Labor is Empty';}
		elseif (empty($year2_Percentage)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Percentage of Direct Labor is Empty';
		} elseif (empty($year3_Percentage)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Percentage of Direct Labor is Empty';
		} else {
			$payroll = new payrollModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$payroll->getByRcc($user_id);

			$f3->set('PAYROLL.title', $title);
			$f3->set('PAYROLL.year1_Salary', $year1_Salary);
			$f3->set('PAYROLL.year2_Salary', $year2_Salary);
			$f3->set('PAYROLL.year3_Salary', $year3_Salary);
			$f3->set('PAYROLL.list_order', $list_order);
			$f3->set('PAYROLL.year1_PayrollTax', $year1_PayrollTax);
			$f3->set('PAYROLL.year2_PayrollTax', $year2_PayrollTax);
			$f3->set('PAYROLL.year3_PayrollTax', $year3_PayrollTax);
			$f3->set('PAYROLL.year1_Percentage', $year1_Percentage);
			$f3->set('PAYROLL.year2_Percentage', $year2_Percentage);
			$f3->set('PAYROLL.year3_Percentage', $year3_Percentage);
			$f3->set('PAYROLL.created', $created);
			$f3->set('PAYROLL.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PAYROLL.company_id', $id);


			$payroll->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Payroll Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialOwnerContribution(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$year1= $data->year1;
		$year2= $data->year2;
		$year3= $data->year3;
		$created = $this->get_time();

		if (empty($year1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 1 is Empty';
		} elseif (empty($year2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'year 2 is Empty';
		} elseif (empty($year3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 3 is Empty';
		} else {
			$business = new financialOwnerContributionModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$business->getByRcc($user_id);

			$f3->set('CONTRIBUTION.year1', $year1);
			$f3->set('CONTRIBUTION.year2', $year2);
			$f3->set('CONTRIBUTION.year3', $year3);
			$f3->set('CONTRIBUTION.created', $created);
			$f3->set('CONTRIBUTION.user_id', $f3->get('SESSION.user_id'));
			$f3->set('CONTRIBUTION.company_id', $id);



			$business->edit($user_id);


			$sta = $this->statusSuccess;
			$msg = 'Owner Contribution Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function updateFinancialOwnerDraw(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$draw_year1= $data->draw_year1;
		$draw_year2= $data->draw_year2;
		$draw_year3= $data->draw_year3;
		$created = $this->get_time();

		if (empty($draw_year1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 1 is Empty';
		} elseif (empty($draw_year2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'year 2 is Empty';
		} elseif (empty($draw_year3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year 3 is Empty';
		} else {
			$business = new financialOwnerDrawModel($this->db);
			$user_id = $f3->get('SESSION.user_id');
			$business->getByRcc($user_id);

			$f3->set('DRAW.year1', $draw_year1);
			$f3->set('DRAW.year2', $draw_year2);
			$f3->set('DRAW.year3', $draw_year3);
			$f3->set('DRAW.created', $created);
			$f3->set('DRAW.user_id', $f3->get('SESSION.user_id'));
			$f3->set('DRAW.company_id', $id);


			$business->edit($user_id);

			$sta = $this->statusSuccess;
			$msg = 'Owner Draw Added Successfully';
		}

		$this->send($sta, $msg);
	}

	function ProductService(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$service_name= $data->service_name;
		$list_order= $data->list_order;
		$product_service= $data->product_service;
		$revenue_unitSold= $data->revenue_unitSold;
		$year_sale1= $data->year_sale1;
		$year_cost1= $data->year_cost1;
		$year_sale2= $data->year_sale2;
		$year_cost2= $data->year_cost2;
		$year_sale3= $data->year_sale3;
		$year_cost3= $data->year_cost3;

		$created = $this->get_time();

		if (empty($service_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Service Name is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($year_sale1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Sale is Empty';
		} elseif (empty($year_sale2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Sale is Empty';
		} elseif (empty($year_sale3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Sale is Empty';
		} elseif (empty($year_cost1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Cost is Empty';
		} elseif (empty($year_cost2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Cost is Empty';
		} elseif (empty($year_cost3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Cost is Empty';
		} else {
			$product = new productServiceModel($this->db);

//            $user->getByEmail($f3->get('SESSION.email'));
//            $user->getByRcc($f3->get('SESSION.rcc_no'));

			$f3->set('PRODUCT_SERVICE.service_name', $service_name);
			$f3->set('PRODUCT_SERVICE.list_order', $list_order);
			$f3->set('PRODUCT_SERVICE.product_service', $product_service);
			$f3->set('PRODUCT_SERVICE.revenue_unitSold', $revenue_unitSold);
			$f3->set('PRODUCT_SERVICE.created', $created);
			$f3->set('PRODUCT_SERVICE.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PRODUCT_SERVICE.company_id', $id);
			$product->add();

			$productSale = new productServiceSaleModel($this->db);

			$f3->set('PRODUCT_SALE.year_sale', $year_sale1);
			$f3->set('PRODUCT_SALE.year_id', $data->y1);
			$f3->set('PRODUCT_SALE.month1', 	$data->month1);
			$f3->set('PRODUCT_SALE.month2', 	$data->month2);
			$f3->set('PRODUCT_SALE.month3', 	$data->month3);
			$f3->set('PRODUCT_SALE.month4', 	$data->month4);
			$f3->set('PRODUCT_SALE.month5', 	$data->month5);
			$f3->set('PRODUCT_SALE.month6', 	$data->month6);
			$f3->set('PRODUCT_SALE.month7', 	$data->month7);
			$f3->set('PRODUCT_SALE.month8', 	$data->month8);
			$f3->set('PRODUCT_SALE.month9', 	$data->month9);
			$f3->set('PRODUCT_SALE.month10', $data->month10);
			$f3->set('PRODUCT_SALE.month11', $data->month11);
			$f3->set('PRODUCT_SALE.month12', $data->month12);

			$f3->set('PRODUCT_SALE.created', $created);
			$f3->set('PRODUCT_SALE.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PRODUCT_SALE.company_id', $id);



			$productSale->add();

			$productSale2 = new productServiceSaleModel($this->db);

			$f3->set('PRODUCT_SALE.year_sale', $year_sale2);
			$f3->set('PRODUCT_SALE.year_id', $data->y2);
			$f3->set('PRODUCT_SALE.month1', 	$data->month13);
			$f3->set('PRODUCT_SALE.month2', 	$data->month14);
			$f3->set('PRODUCT_SALE.month3', 	$data->month15);
			$f3->set('PRODUCT_SALE.month4', 	$data->month16);
			$f3->set('PRODUCT_SALE.month5', 	$data->month17);
			$f3->set('PRODUCT_SALE.month6', 	$data->month18);
			$f3->set('PRODUCT_SALE.month7', 	$data->month19);
			$f3->set('PRODUCT_SALE.month8', 	$data->month20);
			$f3->set('PRODUCT_SALE.month9', 	$data->month21);
			$f3->set('PRODUCT_SALE.month10', $data->month22);
			$f3->set('PRODUCT_SALE.month11', $data->month23);
			$f3->set('PRODUCT_SALE.month12', $data->month24);

			$f3->set('PRODUCT_SALE.created', $created);
			$f3->set('PRODUCT_SALE.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PRODUCT_SALE.company_id', $id);

			$productSale2->add();

			$productSale3 = new productServiceSaleModel($this->db);

			$f3->set('PRODUCT_SALE.year_sale', $year_sale3);
			$f3->set('PRODUCT_SALE.year_id', $data->y3);
			$f3->set('PRODUCT_SALE.month1', 	$data->month25);
			$f3->set('PRODUCT_SALE.month2', 	$data->month26);
			$f3->set('PRODUCT_SALE.month3', 	$data->month27);
			$f3->set('PRODUCT_SALE.month4', 	$data->month28);
			$f3->set('PRODUCT_SALE.month5', 	$data->month29);
			$f3->set('PRODUCT_SALE.month6', 	$data->month30);
			$f3->set('PRODUCT_SALE.month7', 	$data->month31);
			$f3->set('PRODUCT_SALE.month8', 	$data->month32);
			$f3->set('PRODUCT_SALE.month9', 	$data->month33);
			$f3->set('PRODUCT_SALE.month10', $data->month34);
			$f3->set('PRODUCT_SALE.month11', $data->month35);
			$f3->set('PRODUCT_SALE.month12', $data->month36);

			$f3->set('PRODUCT_SALE.created', $created);
			$f3->set('PRODUCT_SALE.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PRODUCT_SALE.company_id', $id);

			$productSale3->add();




			$productCost = new productServiceCostModel($this->db);

			$f3->set('PRODUCT_COST.year_cost', $year_cost1);
			$f3->set('PRODUCT_COST.year_id', $data->y1);
			$f3->set('PRODUCT_COST.month1', 	$data->month37);
			$f3->set('PRODUCT_COST.month2', 	$data->month38);
			$f3->set('PRODUCT_COST.month3', 	$data->month39);
			$f3->set('PRODUCT_COST.month4', 	$data->month40);
			$f3->set('PRODUCT_COST.month5', 	$data->month41);
			$f3->set('PRODUCT_COST.month6', 	$data->month42);
			$f3->set('PRODUCT_COST.month7', 	$data->month43);
			$f3->set('PRODUCT_COST.month8', 	$data->month44);
			$f3->set('PRODUCT_COST.month9', 	$data->month45);
			$f3->set('PRODUCT_COST.month10', $data->month46);
			$f3->set('PRODUCT_COST.month11', $data->month47);
			$f3->set('PRODUCT_COST.month12', $data->month48);

			$f3->set('PRODUCT_COST.created', $created);
			$f3->set('PRODUCT_COST.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PRODUCT_COST.company_id', $id);



			$productCost->add();

			$productCost2 = new productServiceCostModel($this->db);

			$f3->set('PRODUCT_COST.year_cost', $year_cost2);
			$f3->set('PRODUCT_COST.year_id', $data->y2);
			$f3->set('PRODUCT_COST.month1', 	$data->month49);
			$f3->set('PRODUCT_COST.month2', 	$data->month50);
			$f3->set('PRODUCT_COST.month3', 	$data->month51);
			$f3->set('PRODUCT_COST.month4', 	$data->month52);
			$f3->set('PRODUCT_COST.month5', 	$data->month53);
			$f3->set('PRODUCT_COST.month6', 	$data->month54);
			$f3->set('PRODUCT_COST.month7', 	$data->month55);
			$f3->set('PRODUCT_COST.month8', 	$data->month56);
			$f3->set('PRODUCT_COST.month9', 	$data->month57);
			$f3->set('PRODUCT_COST.month10', $data->month58);
			$f3->set('PRODUCT_COST.month11', $data->month59);
			$f3->set('PRODUCT_COST.month12', $data->month60);

			$f3->set('PRODUCT_COST.created', $created);
			$f3->set('PRODUCT_COST.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PRODUCT_COST.company_id', $id);

			$productCost2->add();

			$productCost3 = new productServiceCostModel($this->db);

			$f3->set('PRODUCT_COST.year_cost', $year_cost3);
			$f3->set('PRODUCT_COST.year_id', $data->y3);
			$f3->set('PRODUCT_COST.month1', 	$data->month61);
			$f3->set('PRODUCT_COST.month2', 	$data->month62);
			$f3->set('PRODUCT_COST.month3', 	$data->month63);
			$f3->set('PRODUCT_COST.month4', 	$data->month64);
			$f3->set('PRODUCT_COST.month5', 	$data->month65);
			$f3->set('PRODUCT_COST.month6', 	$data->month66);
			$f3->set('PRODUCT_COST.month7', 	$data->month67);
			$f3->set('PRODUCT_COST.month8', 	$data->month68);
			$f3->set('PRODUCT_COST.month9', 	$data->month69);
			$f3->set('PRODUCT_COST.month10', $data->month70);
			$f3->set('PRODUCT_COST.month11', $data->month71);
			$f3->set('PRODUCT_COST.month12', $data->month72);

			$f3->set('PRODUCT_COST.created', $created);
			$f3->set('PRODUCT_COST.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PRODUCT_COST.company_id', $id);

			$productCost3->add();




			$sta = $this->statusSuccess;
			$msg = 'Product&Service Contribution Added Successfully';
		}

		$this->send($sta, $msg);
	}


	function UpdateProductService(Base $f3){
		//it use to get the company_id globally
		$id = $f3->get('PARAMS.company_id');

		$sess = $this->validateSession();
		$data = $this->getInputData();

		$service_name= $data->service_name;
		$list_order= $data->list_order;
		$product_service= $data->product_service;
		$revenue_unitSold= $data->revenue_unitSold;
		$year_sale1= $data->year_sale1;
		$year_cost1= $data->year_cost1;
		$year_sale2= $data->year_sale2;
		$year_cost2= $data->year_cost2;
		$year_sale3= $data->year_sale3;
		$year_cost3= $data->year_cost3;

		$created = $this->get_time();

		if (empty($service_name)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Service Name is Empty';
		} elseif (empty($list_order)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'List Order is Empty';
		} elseif (empty($year_sale1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Sale is Empty';
		} elseif (empty($year_sale2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Sale is Empty';
		} elseif (empty($year_sale3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Sale is Empty';
		} elseif (empty($year_cost1)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Cost is Empty';
		} elseif (empty($year_cost2)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Cost is Empty';
		} elseif (empty($year_cost3)) {
			$sta = $this->statusErrorReadingResource;
			$msg = 'Year Cost is Empty';
		} else {
			$product = new productServiceModel($this->db);
			$user_id = $f3->get("SESSION.user_id");
         // $product->getByRccByCompanyId($product_id);

			$f3->set('PRODUCT_SERVICE.service_name', $service_name);
			$f3->set('PRODUCT_SERVICE.list_order', $list_order);
			$f3->set('PRODUCT_SERVICE.product_service', $product_service);
			$f3->set('PRODUCT_SERVICE.revenue_unitSold', $revenue_unitSold);
			$f3->set('PRODUCT_SERVICE.created', $created);
			$f3->set('PRODUCT_SERVICE.user_id', $f3->get('SESSION.user_id'));
			$f3->set('PRODUCT_SERVICE.company_id', $id);
			$product->edit($user_id);
			$product->save();


			$productSale = new productServiceSaleModel($this->db);
			$productSale_id = $f3->get('SESSION.company_id');
			$c=$productSale->getByRccByCompanyId($productSale_id);
			echo $c;
			/**foreach($c as $prodsale){
				$id = $prodsale->id;
				$yearSale = $prodsale->year_id;
				if($yearSale == 'y1'){
					$f3->set('PRODUCT_SALE.year_sale', $year_sale1);
					$f3->set('PRODUCT_SALE.year_id', $data->y1);
					$f3->set('PRODUCT_SALE.month1', 	$data->month1);
					$f3->set('PRODUCT_SALE.month2', 	$data->month2);
					$f3->set('PRODUCT_SALE.month3', 	$data->month3);
					$f3->set('PRODUCT_SALE.month4', 	$data->month4);
					$f3->set('PRODUCT_SALE.month5', 	$data->month5);
					$f3->set('PRODUCT_SALE.month6', 	$data->month6);
					$f3->set('PRODUCT_SALE.month7', 	$data->month7);
					$f3->set('PRODUCT_SALE.month8', 	$data->month8);
					$f3->set('PRODUCT_SALE.month9', 	$data->month9);
					$f3->set('PRODUCT_SALE.month10', $data->month10);
					$f3->set('PRODUCT_SALE.month11', $data->month11);
					$f3->set('PRODUCT_SALE.month12', $data->month12);

					$f3->set('PRODUCT_SALE.created', $created);
					$f3->set('PRODUCT_SALE.user_id', $f3->get('SESSION.user_id'));
					$f3->set('PRODUCT_SALE.company_id', $id);

					$productSale->edit($id);
				}elseif ($yearSale == 'y2'){
					$f3->set('PRODUCT_SALE.year_sale', $year_sale2);
					$f3->set('PRODUCT_SALE.year_id', $data->y2);
					$f3->set('PRODUCT_SALE.month1', 	$data->month13);
					$f3->set('PRODUCT_SALE.month2', 	$data->month14);
					$f3->set('PRODUCT_SALE.month3', 	$data->month15);
					$f3->set('PRODUCT_SALE.month4', 	$data->month16);
					$f3->set('PRODUCT_SALE.month5', 	$data->month17);
					$f3->set('PRODUCT_SALE.month6', 	$data->month18);
					$f3->set('PRODUCT_SALE.month7', 	$data->month19);
					$f3->set('PRODUCT_SALE.month8', 	$data->month20);
					$f3->set('PRODUCT_SALE.month9', 	$data->month21);
					$f3->set('PRODUCT_SALE.month10', $data->month22);
					$f3->set('PRODUCT_SALE.month11', $data->month23);
					$f3->set('PRODUCT_SALE.month12', $data->month24);

					$f3->set('PRODUCT_SALE.created', $created);
					$f3->set('PRODUCT_SALE.user_id', $f3->get('SESSION.user_id'));
					$f3->set('PRODUCT_SALE.company_id', $id);
					$productSale->edit($id);
				}elseif($yearSale == 'y3'){
					$f3->set('PRODUCT_SALE.year_sale', $year_sale3);
					$f3->set('PRODUCT_SALE.year_id', $data->y3);
					$f3->set('PRODUCT_SALE.month1', 	$data->month25);
					$f3->set('PRODUCT_SALE.month2', 	$data->month26);
					$f3->set('PRODUCT_SALE.month3', 	$data->month27);
					$f3->set('PRODUCT_SALE.month4', 	$data->month28);
					$f3->set('PRODUCT_SALE.month5', 	$data->month29);
					$f3->set('PRODUCT_SALE.month6', 	$data->month30);
					$f3->set('PRODUCT_SALE.month7', 	$data->month31);
					$f3->set('PRODUCT_SALE.month8', 	$data->month32);
					$f3->set('PRODUCT_SALE.month9', 	$data->month33);
					$f3->set('PRODUCT_SALE.month10', $data->month34);
					$f3->set('PRODUCT_SALE.month11', $data->month35);
					$f3->set('PRODUCT_SALE.month12', $data->month36);

					$f3->set('PRODUCT_SALE.created', $created);
					$f3->set('PRODUCT_SALE.user_id', $f3->get('SESSION.user_id'));
					$f3->set('PRODUCT_SALE.company_id', $id);
					$productSale->edit($id);
				}


			}



			$productCost = new productServiceCostModel($this->db);
			$productCost_id = $f3->get('SESSION.company_id');
			$d=$productCost->getByRccByCompanyId($productCost_id);
			foreach($d as $prodcost){
				$id = $prodcost->id;
				$yearCost = $prodcost->year_id;
				if($yearCost == 'y1'){
					$f3->set('PRODUCT_COST.year_cost', $year_cost1);
					$f3->set('PRODUCT_COST.year_id', $data->y1);
					$f3->set('PRODUCT_COST.month1', 	$data->month37);
					$f3->set('PRODUCT_COST.month2', 	$data->month38);
					$f3->set('PRODUCT_COST.month3', 	$data->month39);
					$f3->set('PRODUCT_COST.month4', 	$data->month40);
					$f3->set('PRODUCT_COST.month5', 	$data->month41);
					$f3->set('PRODUCT_COST.month6', 	$data->month42);
					$f3->set('PRODUCT_COST.month7', 	$data->month43);
					$f3->set('PRODUCT_COST.month8', 	$data->month44);
					$f3->set('PRODUCT_COST.month9', 	$data->month45);
					$f3->set('PRODUCT_COST.month10', $data->month46);
					$f3->set('PRODUCT_COST.month11', $data->month47);
					$f3->set('PRODUCT_COST.month12', $data->month48);
					$f3->set('PRODUCT_COST.created', $created);
					$f3->set('PRODUCT_COST.user_id', $f3->get('SESSION.user_id'));
					$f3->set('PRODUCT_COST.company_id', $id);
					$productCost->edit($id);
				}elseif ($yearCost == 'y2'){
					$f3->set('PRODUCT_COST.year_cost', $year_cost2);
					$f3->set('PRODUCT_COST.year_id', $data->y2);
					$f3->set('PRODUCT_COST.month1', 	$data->month49);
					$f3->set('PRODUCT_COST.month2', 	$data->month50);
					$f3->set('PRODUCT_COST.month3', 	$data->month51);
					$f3->set('PRODUCT_COST.month4', 	$data->month52);
					$f3->set('PRODUCT_COST.month5', 	$data->month53);
					$f3->set('PRODUCT_COST.month6', 	$data->month54);
					$f3->set('PRODUCT_COST.month7', 	$data->month55);
					$f3->set('PRODUCT_COST.month8', 	$data->month56);
					$f3->set('PRODUCT_COST.month9', 	$data->month57);
					$f3->set('PRODUCT_COST.month10', $data->month58);
					$f3->set('PRODUCT_COST.month11', $data->month59);
					$f3->set('PRODUCT_COST.month12', $data->month60);

					$f3->set('PRODUCT_COST.created', $created);
					$f3->set('PRODUCT_COST.user_id', $f3->get('SESSION.user_id'));
					$f3->set('PRODUCT_COST.company_id', $id);
					$productCost->edit($id);
				}elseif ($yearCost == 'y3'){
					$f3->set('PRODUCT_COST.year_cost', $year_cost3);
					$f3->set('PRODUCT_COST.year_id', $data->y3);
					$f3->set('PRODUCT_COST.month1', 	$data->month61);
					$f3->set('PRODUCT_COST.month2', 	$data->month62);
					$f3->set('PRODUCT_COST.month3', 	$data->month63);
					$f3->set('PRODUCT_COST.month4', 	$data->month64);
					$f3->set('PRODUCT_COST.month5', 	$data->month65);
					$f3->set('PRODUCT_COST.month6', 	$data->month66);
					$f3->set('PRODUCT_COST.month7', 	$data->month67);
					$f3->set('PRODUCT_COST.month8', 	$data->month68);
					$f3->set('PRODUCT_COST.month9', 	$data->month69);
					$f3->set('PRODUCT_COST.month10', $data->month70);
					$f3->set('PRODUCT_COST.month11', $data->month71);
					$f3->set('PRODUCT_COST.month12', $data->month72);

					$f3->set('PRODUCT_COST.created', $created);
					$f3->set('PRODUCT_COST.user_id', $f3->get('SESSION.user_id'));
					$f3->set('PRODUCT_COST.company_id', $id);
					$productCost->edit($id);
				}
			}**/

			$sta = $this->statusSuccess;
			$msg = 'Product&Service Contribution Updated Successfully';
		}

		$this->send($sta, $msg);
	}




}