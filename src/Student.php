<?php 

namespace Longka;

class Student
{
	/**
	 * @var string
	 */	
	protected $name;

	/**
	 * @var string studentId
	 */
	protected $studentId;

	/**
	 * @var string birthday
	 */
	protected $birthday;

	public function __construct()
	{
		echo "this is student constructor" . "\n";	
	}

	/**
	 * Returns all courses that students enrolled
	 * todo: This to prove broken single responsibility in solid principle
	 * connect to database, handle connection , etc
	 * @return array
	 */
	public function getCourses()
	{
			
	}

	/**
	 * This func aim to get student github info if he has one account
	 * TODO: this to prove broke single responsibility in SOLID principle
	 * call github api
	 */ 
	public function getGithubInfo()
	{
	}
}
