<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    protected Contact $contact;
    public function __construct(Contact $contact)
    {
        parent::__construct($contact);
    }
}
