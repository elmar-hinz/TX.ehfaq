<?php
namespace ElmarHinz\Ehfaq\Domain\Model;

/***
 *
 * This file is part of the "Simple FAQ" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Elmar Hinz Distribution <t3elmar@gmail.com>, Elmar Hinz
 *
 ***/

/**
 * A pair of question and answer.
 */
class FAQ extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * question
     *
     * @var string
     */
    protected $question = '';
    
    /**
     * answer
     *
     * @var string
     */
    protected $answer = '';
    
    /**
     * Returns the question
     *
     * @return string $question
     */
    public function getQuestion()
    {
        return $this->question;
    }
    
    /**
     * Sets the question
     *
     * @param string $question
     * @return void
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }
    
    /**
     * Returns the answer
     *
     * @return string $answer
     */
    public function getAnswer()
    {
        return $this->answer;
    }
    
    /**
     * Sets the answer
     *
     * @param string $answer
     * @return void
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }
}
