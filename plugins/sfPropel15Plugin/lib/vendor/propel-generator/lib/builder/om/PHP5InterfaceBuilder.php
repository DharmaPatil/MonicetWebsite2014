<?php

/*
 *  $Id: PHP5InterfaceBuilder.php 1570 2010-02-20 10:47:22Z francois $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information please see
 * <http://propel.phpdb.org>.
 */

require_once 'builder/om/ObjectBuilder.php';

/**
 * Generates the empty PHP5 stub interface for user object model (OM).
 *
 * This class produces the empty stub interface when the interface="" attribute is used
 * in the the schema xml.
 *
 * This class replaces the Interface.tpl, with the intent of being easier for users
 * to customize (through extending & overriding).
 *
 * @author     Hans Lellelid <hans@xmpl.org>
 * @package    propel.generator.builder.om
 */
class PHP5InterfaceBuilder extends ObjectBuilder
{

	/**
	 * Returns the name of the current class being built.
	 * @return     string
	 */
	public function getUnprefixedClassname()
	{
		return ClassTools::classname($this->getInterface());
	}

	/**
	 * Adds the include() statements for files that this class depends on or utilizes.
	 * @param      string &$script The script will be modified in this method.
	 */
	protected function addIncludes(&$script)
	{

	} // addIncludes()

	/**
	 * Adds class phpdoc comment and openning of class.
	 * @param      string &$script The script will be modified in this method.
	 */
	protected function addClassOpen(&$script)
	{

		$table = $this->getTable();
		$tableName = $table->getName();
		$tableDesc = $table->getDescription();

		$baseClassname = $this->getObjectBuilder()->getClassname();

		$script .= "
/**
 * This is an interface that should be filled with the public api of the $tableName objects.
 *
 * $tableDesc
 *";
		if ($this->getBuildProperty('addTimeStamp')) {
			$now = strftime('%c');
			$script .= "
 * This class was autogenerated by Propel " . $this->getBuildProperty('version') . " on:
 *
 * $now
 *";
		}
		$script .= "
 * You should add additional method declarations to this interface to meet the
 * application requirements.  This interface will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.".$this->getPackage()."
 */
interface ".$this->getClassname()." {
";
	}

	/**
	 * Specifies the methods that are added as part of the stub object class.
	 *
	 * By default there are no methods for the empty stub classes; override this method
	 * if you want to change that behavior.
	 *
	 * @see        ObjectBuilder::addClassBody()
	 */
	protected function addClassBody(&$script)
	{
		// there is no class body
	}

	/**
	 * Closes class.
	 * @param      string &$script The script will be modified in this method.
	 */
	protected function addClassClose(&$script)
	{
		$script .= "
} // " . $this->getClassname() . "
";
	}

} // PHP5ExtensionObjectBuilder
