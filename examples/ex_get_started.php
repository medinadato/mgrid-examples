<?php 

/*
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
 * and is licensed under the LGPL. For more information, see
 * <http://mgrid.mdnsolutions.com/license>.
 */

// load the vendor autoload
require __DIR__ . '/../vendor/autoload.php';

class MyTestGrid extends \Mgrid\Grid
{
    // this class is the one called by the render
    public function init()
    {
        $this->addColumn(array(
                    'label' => 'Id',
                    'index' => 'id',
                ))
            ->addColumn(array(
                    'label' => 'Customer',
                    'index' => 'name',
                ));
    }
}

// some data to output
$mockResultSet = array(
    0 => array(
        'id' => 1001,
        'name' => 'Mary Due'
    ),
    1 => array(
        'id' => 1003,
        'name' => 'John Due'
    ),
);
        
// instance of my grid
$myTestGridObj = new MyTestGrid();

// set datasource
$myTestGridObj->setSource(new \Mgrid\Source\ArraySource($mockResultSet));

?>

<html>
    
    <head>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
        <title>Mgrid Example</title>
        <style>
            body { font-family: 'PT Sans', sans-serif, "Trebuchet MS"; }
        </style>
    </head>
    
    <body>
        <!-- Rendering the grid  -->
        <?php echo $myTestGridObj->render(); ?>
    </body>
    
</html>
