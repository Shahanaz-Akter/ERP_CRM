<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/s', function () {
    return view('welcome');
});
Route::get('/leads', function () {
    return view('Leads.leads');
});
Route::get('/leads/profile', function () {
    return view('Leads.LeadsPages.leads_profile');
});
Route::get('/leads/editProfile', function () {
    return view('Leads.LeadsPages.leads_edit');
});
Route::get('/leads/mass-delete', function () {
    return view('Leads.actionRoutes.mass_delete');
});
Route::get('/leads/mass-update', function () {
    return view('Leads.actionRoutes.massUpdate.mass_update');
});
Route::get('/leads/mass-convert', function () {
    return view('Leads.actionRoutes.massConvert.mass_convert');
});
Route::get('/leads/manage-tags', function () {
    return view('Leads.actionRoutes.manageTags.manage_tags');
});
Route::get('/leads/mass-email', function () {
    return view('Leads.actionRoutes.massEmail.mass_email');
});
Route::get('/leads/send-mass-email', function () {
    return view('Leads.actionRoutes.massEmail.sent_email');
});
Route::get('/leads/stopped-mass-email', function () {
    return view('Leads.actionRoutes.massEmail.stopped_meail');
});
Route::get('/leads/new-mass-email', function () {
    return view('Leads.actionRoutes.massEmail.new_mass_email');
});
Route::get('/leads/drafts', function () {
    return view('Leads.actionRoutes.Drafts.drafts');
});
Route::get('/leads/autoresponders', function () {
    return view('Leads.actionRoutes.Autoresponders.autoresponders');
});
Route::get('/leads/autoresponders/new-autoresponder', function () {
    return view('Leads.actionRoutes.Autoresponders.new_autoresponder');
});
Route::get('/leads/autoresponders/create-folder', function () {
    return view('Leads.actionRoutes.Autoresponders.create_folder');
});
Route::get('/leads/lead-approval', function () {
    return view('Leads.actionRoutes.leadApproval.lead_approval');
});
Route::get('/create_leads', function () {
    return view('Leads.create_lead');
});
// Route::post('/mula', function (Request $request) {
//     dd($request);
// });
Route::get('/leads/test', function (Request $request) {
    return view('Leads.test.test');
});

// routing for the Contacts pages 
Route::get('/contacts', function () {
    return view('Contacts.contacts');
});
Route::get('/create_contacts', function () {
    return view('Contacts.create_contacts');
});
Route::get('/contacts/profile', function () {
    return view('Contacts.ContactPages.contact_profile');
});
Route::get('/contacts/editProfile', function () {
    return view('Contacts.ContactPages.contact_edit_profile');
});
Route::get('/contacts/contacts-delete', function () {
    return view('Contacts.ContactActionRoutes.contactDelete.contact_delete');
});
Route::get('/contacts/contacts-update', function () {
    return view('Contacts.ContactActionRoutes.contactUpdate.contact_update');
});
Route::get('/contacts/contacts-manage-tags', function () {
    return view('Contacts.ContactActionRoutes.contactManageTags.contact_manage_tags');
});
Route::get('/contacts/contacts-drafts', function () {
    return view('Contacts.ContactActionRoutes.contactDrafts.contact_drafts');
});
Route::get('/contacts/mass-email', function () {
    return view('Contacts.ContactActionRoutes.contactMassEmail.contact_mass_email');
});
Route::get('/contacts/send-mass-email', function () {
    return view('Contacts.ContactActionRoutes.contactMassEmail.contact_sent_email');
});
Route::get('/contacts/stopped-mass-email', function () {
    return view('Contacts.ContactActionRoutes.contactMassEmail.contact_stopped_meail');
});
Route::get('/contacts/new-mass-email', function () {
    return view('Contacts.ContactActionRoutes.contactMassEmail.contact_new_mass_email');
});
Route::get('/contacts/autoresponders', function () {
    return view('Contacts.ContactActionRoutes.contactAutoresponders.contact_autoresponders');
});
Route::get('/contacts/new-autoresponder', function () {
    return view('Contacts.ContactActionRoutes.contactAutoresponders.contact_new_autoresponder');
});
Route::get('/contacts/create-folder', function () {
    return view('Contacts.ContactActionRoutes.contactAutoresponders.contact_create_folder');
});
Route::get('/contacts/approval', function () {
    return view('Contacts.ContactActionRoutes.contactApproval.contact_approval');
});

// routing for the Accounts pages 
Route::get('/accounts', function () {
    return view('Accounts.accounts');
});
Route::get('/create_account', function () {
    return view('Accounts.create_account');
});
Route::get('/accounts/profile', function () {
    return view('Accounts.AccountsPages.account_profile');
});
Route::get('/accounts/editProfile', function () {
    return view('Accounts.AccountsPages.account_edit_profile');
});
Route::get('/accounts/accounts-mass-delete', function () {
    return view('Accounts.AccountsActionRoutes.accountMassDelete.account_mass_delete');
});
Route::get('/accounts/accounts-mass-update', function () {
    return view('Accounts.AccountsActionRoutes.accountMassUpdate.account_mass_update');
});
Route::get('/accounts/accounts-manage-tags', function () {
    return view('Accounts.AccountsActionRoutes.accountManageTags.account_manage_tags');
});
Route::get('/accounts/accounts-drafts', function () {
    return view('Accounts.AccountsActionRoutes.accountDrafts.account_drafts');
});

// routing for the deals pages 
Route::get('/deals', function () {
    return view('Deals.deals');
});
Route::get('/create_deals', function () {
    return view('Deals.create_deals');
});
Route::get('/deals/profile', function () {
    return view('Deals.DealsPages.deals_profile');
});
Route::get('/deals/editProfile', function () {
    return view('Deals.DealsPages.deals_edit_profile');
});
Route::get('/deals/deals-mass-delete', function () {
    return view('Deals.DealsActionRoutes.dealsMassDelete.deals_delete');
});
Route::get('/deals/deals-mass-update', function () {
    return view('Deals.DealsActionRoutes.dealsMassUpdate.deals_update');
});
Route::get('/deals/deals-manage-tags', function () {
    return view('Deals.DealsActionRoutes.dealsManageTags.deals_manage_tags');
});
Route::get('/deals/deals-drafts', function () {
    return view('Deals.DealsActionRoutes.dealsDrafts.deals_drafts');
});
Route::get('/deals/mass-email', function () {
    return view('Deals.DealsActionRoutes.dealsMassEmail.deals_mass_email');
});
Route::get('/deals/send-mass-email', function () {
    return view('Deals.DealsActionRoutes.dealsMassEmail.deals_sent_email');
});
Route::get('/deals/stopped-mass-email', function () {
    return view('Deals.DealsActionRoutes.dealsMassEmail.deals_stopped_email');
});
Route::get('/deals/new-mass-email', function () {
    return view('Deals.DealsActionRoutes.dealsMassEmail.deals_new_mass_email');
});



//Task Route
Route::get('/task', function () {
    return view('Task.task');
});