<?php
namespace XeroPHP\Models\Projects;

use XeroPHP\Remote;

class Project extends Remote\Model
{


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Projects';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Project';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return 'ProjectID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return 'projects.xro';
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods()
    {
        return [
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_GET,
            Remote\Request::METHOD_PATCH
        ];
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'projectId' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'contactId' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'name' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'deadlineUtc' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'minutesLogged' => [false, self::PROPERTY_TYPE_INT, null, false, false],
            'minutesToBeInvoiced' => [false, self::PROPERTY_TYPE_INT, null, false, false],
            'status' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'totalTaskAmount' => [false, null, null, true, false],
            'totalExpenseAmount' => [false, null, null, true, false],
            'taskAmountToBeInvoiced' => [false, null, null, true, false],
            'taskAmountInvoiced' => [false, null, null, true, false],
            'expenseAmountToBeInvoiced' => [false, null, null, true, false],
            'expenseAmountInvoiced' => [false, null, null, true, false],
            'projectAmountInvoiced' => [false, null, null, true, false],
            'totalTaskAmount' => [false, null, null, true, false],
            'deposit' => [false, null, null, true, false],
            'depositApplied' => [false, null, null, true, false],
            'creditNoteAmount' => [false, null, null, true, false],
            'totalInvoiced' => [false, null, null, true, false],
            'totalToBeInvoiced' => [false, null, null, true, false],
            'estimate' => [false, null, null, true, false],
        ];
    }

    public static function isPageable()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getProjectID()
    {
        return $this->_data['projectId'];
    }

    /**
     * @param string $value
     * @return Project
     */
    public function setProjectID($value)
    {
        $this->propertyUpdated('projectId', $value);
        $this->_data['projectId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactID()
    {
        return $this->_data['contactId'];
    }

    /**
     * @param string $value
     * @return Contact
     */
    public function setContactID($value)
    {
        $this->propertyUpdated('contactId', $value);
        $this->_data['contactId'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_data['name'];
    }

    /**
     * @param string $value
     * @return Account
     */
    public function setName($value)
    {
        $this->propertyUpdated('name', $value);
        $this->_data['name'] = $value;
        return $this;
    }

    public function getTotalTaskAmount()
    {
        return $this->getProjectAttributeValue('totalTaskAmount');
    }

    public function getTotalExpenseAmount()
    {
        return $this->getProjectAttributeValue('totalExpenseAmount');
    }

    public function getTaskAmountToBeInvoiced()
    {
        return $this->getProjectAttributeValue('taskAmountToBeInvoiced');
    }

    public function getTaskAmountInvoiced()
    {
        return $this->getProjectAttributeValue('taskAmountInvoiced');
    }

    public function getExpenseAmountToBeInvoiced()
    {
        return $this->getProjectAttributeValue('expenseAmountToBeInvoiced');
    }

    public function getExpenseAmountInvoiced()
    {
        return $this->getProjectAttributeValue('expenseAmountInvoiced');
    }

    public function getProjectAmountInvoiced()
    {
        return $this->getProjectAttributeValue('projectAmountInvoiced');
    }

    public function getDeposit()
    {
        return $this->getProjectAttributeValue('deposit');
    }

    public function getDepositApplied()
    {
        return $this->getProjectAttributeValue('depositApplied');
    }

    public function getCreditNoteAmount()
    {
        return $this->getProjectAttributeValue('creditNoteAmount');
    }

    public function getTotalInvoiced()
    {
        return $this->getProjectAttributeValue('totalInvoiced');
    }

    public function getTotalToBeInvoiced()
    {
        return $this->getProjectAttributeValue('totalToBeInvoiced');
    }

    public function getEstimate()
    {
        return $this->getProjectAttributeValue('estimate');
    }

    private function getProjectAttributeValue($attribute)
    {
        return $this->_data[$attribute]->value ?? 0;
    }

}