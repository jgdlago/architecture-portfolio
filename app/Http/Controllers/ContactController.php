<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Interfaces\ContactRepositoryInterface;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Exception;

class ContactController extends Controller
{
    protected ContactRepositoryInterface $contactRepository;
    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $contacts = $this->contactRepository->getAllModel();
        return view('contact.index', compact('contacts'));
    }

    /**
     * @param Contact|int $contactId
     * @return View
     */
    public function show(Contact|int $contactId): View
    {
        $contact = $this->contactRepository->getModelByid($contactId);
        return view('contacts.show', compact('contact'));
    }

    /**
     * @param ContactFormRequest $contactDetails
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(ContactFormRequest $contactDetails): RedirectResponse
    {
        $this->contactRepository->createModel($contactDetails->safe()->toArray());
        return redirect()->route('contacts.index');
    }

    /**
     * @param ContactFormRequest $contactDetails
     * @param Contact|int $contactId
     * @return RedirectResponse
     */
    public function update(ContactFormRequest $contactDetails, Contact|int $contactId): RedirectResponse
    {
        $this->contactRepository->updateModel($contactDetails->safe()->toArray(), $contactId);
        return redirect()->route('contacts.index');
    }

    /**
     * @param Contact|int $contactId
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Contact|int $contactId): RedirectResponse
    {
        $this->contactRepository->deleteModel($contactId);
        return redirect()->route('contacts.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('contacts.create');
    }

    /**
     * @param Contact|int $contactId
     * @return View
     */
    public function edit(Contact|int $contactId): View
    {
        $contact = $this->contactRepository->getModelByid($contactId);
        return view('contacts.edit', compact('contact'));
    }

}
