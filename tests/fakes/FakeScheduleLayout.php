<?php

require_once(ROOT_DIR . 'Domain/Access/namespace.php');

class FakeScheduleLayout implements IScheduleLayout
{
	/**
	 * @var SlotCount
	 */
	public $_SlotCount;

    /**
     * @var SchedulePeriod[]
     */
	public $_Layout = array();

    /**
     * @var string
     */
    public $_Timezone;

    public $_UsesDailyLayouts = false;

    /**
     * @var SchedulePeriod[]
     */
    public $_DailyLayout = array();

    public function __construct()
	{
		$this->_SlotCount = new SlotCount(1, 2);
		$this->_Timezone = 'America/Chicago';
	}

	public function Timezone()
	{
		return $this->_Timezone;
	}

	/**
	 * @return bool
	 */
	public function UsesDailyLayouts()
	{
		return $this->_UsesDailyLayouts;
	}

	/**
	 * @param Date $layoutDate
	 * @param bool $hideBlockedPeriods
	 * @return SchedulePeriod[]|array of SchedulePeriod objects
	 */
	public function GetLayout(Date $layoutDate, $hideBlockedPeriods = false)
	{
	    if (!empty($this->_DailyLayout)){
	        return $this->_DailyLayout[$layoutDate->Timestamp()];
        }

		return $this->_Layout;
	}

    /**
     * @param Date $date
     * @param SchedulePeriod[] $layout
     */
	public function _AddDailyLayout(Date $date, $layout)
    {
        $this->_DailyLayout[$date->Timestamp()] = $layout;
    }

	/**
	 * @param Date $date
	 * @return SchedulePeriod|null period which occurs at this datetime. Includes start time, excludes end time. null if no match is found
	 */
	public function GetPeriod(Date $date)
	{
		// TODO: Implement GetPeriod() method.
	}

	/**
	 * @param Date $startDate
	 * @param Date $endDate
	 * @return SlotCount
	 * @internal param $scheduleId
	 */
	public function GetSlotCount(Date $startDate, Date $endDate)
	{
		return $this->_SlotCount;
	}

	public function ChangePeakTimes(PeakTimes $peakTimes)
	{
		// TODO: Implement ChangePeakTimes() method.
	}

	public function RemovePeakTimes()
	{
		// TODO: Implement RemovePeakTimes() method.
	}

    /**
     * @return bool
     */
    public function FitsToHours()
    {
        // TODO: Implement FitsToHours() method.
    }

    /**
     * @return bool
     */
    public function UsesCustomLayout()
    {
        // TODO: Implement UsesCustomLayout() method.
    }
}
