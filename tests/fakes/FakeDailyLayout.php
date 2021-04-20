<?php

class FakeDailyLayout implements IDailyLayout
{
    public $_Timezone;
    private $_Layouts = array();

    /**
     * @param Date $date
     * @param int $resourceId
     * @return array|IReservationSlot[]
     */
    function GetLayout(Date $date, $resourceId)
    {
       return $this->_Layouts[$date->GetDate()->Timestamp() . $resourceId];
    }

    /**
     * @param Date $date
     * @return bool
     */
    function IsDateReservable(Date $date)
    {
        // TODO: Implement IsDateReservable() method.
    }

    /**
     * @param Date $displayDate
     * @return string[]
     */
    function GetLabels(Date $displayDate)
    {
        // TODO: Implement GetLabels() method.
    }

    /**
     * @param Date $displayDate
     * @return mixed
     */
    function GetPeriods(Date $displayDate)
    {
        // TODO: Implement GetPeriods() method.
    }

    /**
     * @param Date $date
     * @param int $resourceId
     * @return DailyReservationSummary
     */
    function GetSummary(Date $date, $resourceId)
    {
        // TODO: Implement GetSummary() method.
    }

    /**
     * @param Date $date
     * @param int $resourceId
     * @param IReservationSlot[] $reservationSlots
     */
    public function _SetLayout(Date $date, $resourceId, $reservationSlots)
    {
        $this->_Layouts[$date->GetDate()->Timestamp() . $resourceId] = $reservationSlots;
    }

    public function Timezone()
    {
        return $this->_Timezone;
    }
}
