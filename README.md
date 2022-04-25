# CakeDropzone
Dropzone plugin for CakePHP

<h2>Requirements</h2>

HTTP Server. For example: Apache.
PHP 5.2.8 or greater.
CakePHP 2.5.1+

<h2>Dependencies</h2>

Dropzone https://www.dropzone.dev/js/

<h2>Installation</h2>

- upload CakeDropzone folder in the /app/Plugin/ folder
- activate the plugin in /app/Config/bootstrap.php

```php
CakePlugin::loadAll(array(
    'CakeDropzone' => array('bootstrap' => false, 'routes' => true)
));
```

<h3>In the controller or AppController</h3>

```php
public $helpers = array('CakeDropzone.Dropzones');
```

<h3>In the View</h3>

```php
echo $this->Dropzones->dropzone('https://localhost');
```

<h2>License</h2>

MIT LICENSE

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
