<?php

namespace Pixellary\TaskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Task
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="task_name", type="string", length=255)
     */
    private $taskName;

    /**
     * @var string
     *
     * @ORM\Column(name="task_desc", type="text")
     */
    private $taskDesc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="task_deadline", type="date")
     */
    private $taskDeadline;

    /**
     * @var integer
     *
     * @ORM\Column(name="task_progress", type="smallint")
     */
    private $taskProgress;

    /**
     * @var string
     *
     * @ORM\Column(name="task_code", type="string", length=20)
     */
    private $taskCode;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set taskName
     *
     * @param string $taskName
     * @return Task
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;
    
        return $this;
    }

    /**
     * Get taskName
     *
     * @return string 
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Set taskDesc
     *
     * @param string $taskDesc
     * @return Task
     */
    public function setTaskDesc($taskDesc)
    {
        $this->taskDesc = $taskDesc;
    
        return $this;
    }

    /**
     * Get taskDesc
     *
     * @return string 
     */
    public function getTaskDesc()
    {
        return $this->taskDesc;
    }

    /**
     * Set taskDeadline
     *
     * @param \DateTime $taskDeadline
     * @return Task
     */
    public function setTaskDeadline($taskDeadline)
    {
        $this->taskDeadline = $taskDeadline;
    
        return $this;
    }

    /**
     * Get taskDeadline
     *
     * @return \DateTime 
     */
    public function getTaskDeadline()
    {
        return $this->taskDeadline;
    }

    /**
     * Set taskProgress
     *
     * @param integer $taskProgress
     * @return Task
     */
    public function setTaskProgress($taskProgress)
    {
        $this->taskProgress = $taskProgress;
    
        return $this;
    }

    /**
     * Get taskProgress
     *
     * @return integer 
     */
    public function getTaskProgress()
    {
        return $this->taskProgress;
    }

    /**
     * Set taskCode
     *
     * @param string $taskCode
     * @return Task
     */
    public function setTaskCode($taskCode)
    {
        $this->taskCode = $taskCode;
    
        return $this;
    }

    /**
     * Get taskCode
     *
     * @return string 
     */
    public function getTaskCode()
    {
        return $this->taskCode;
    }
}
