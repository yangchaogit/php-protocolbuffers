--TEST--
#41 constructor should accept object
--FILE--
<?php
// @@protoc_insertion_point(namespace:.TestMessage)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: x.proto
 *
 * -*- magic methods -*-
 *
 * @method array getUsers()
 * @method void appendUsers(TestUser $value)
 */
class TestMessage extends ProtocolBuffersMessage
{
  // @@protoc_insertion_point(traits:.TestMessage)
  
  /**
   * @var array $users
   * @tag 1
   * @label optional
   * @type ProtocolBuffers::TYPE_MESSAGE
   * @see TestUser
   **/
  protected $users;
  
  
  // @@protoc_insertion_point(properties_scope:.TestMessage)

  // @@protoc_insertion_point(class_scope:.TestMessage)

  /**
   * get descriptor for protocol buffers
   * 
   * @return ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;
    
    if (!isset($descriptor)) {
      $desc = new ProtocolBuffersDescriptorBuilder();
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "users",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => 'TestUser',
      )));
      // @@protoc_insertion_point(builder_scope:.TestMessage)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}

// @@protoc_insertion_point(namespace:.TestUser)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: x.proto
 *
 * -*- magic methods -*-
 *
 * @method string getId()
 * @method void setId(string $value)
 */
class TestUser extends ProtocolBuffersMessage
{
    // @@protoc_insertion_point(traits:.TestUser)

    /**
     * @var string $id
     * @tag 1
     * @label required
     * @type ProtocolBuffers::TYPE_INT64
     **/
    protected $id;


    // @@protoc_insertion_point(properties_scope:.TestUser)

    // @@protoc_insertion_point(class_scope:.TestUser)

    /**
     * get descriptor for protocol buffers
     *
     * @return ProtocolBuffersDescriptor
     */
    public static function getDescriptor()
    {
        static $descriptor;

        if (!isset($descriptor)) {
            $desc = new ProtocolBuffersDescriptorBuilder();
            $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
                "type"     => ProtocolBuffers::TYPE_INT64,
                "name"     => "id",
                "required" => true,
                "optional" => false,
                "repeated" => false,
                "packable" => false,
                "default"  => null,
            )));
            // @@protoc_insertion_point(builder_scope:.TestUser)

            $descriptor = $desc->build();
        }
        return $descriptor;
    }

}

$bar = new TestMessage(array('users' => array(
    new TestUser(array('id' => 1)),
    new TestUser(array('id' => 2)),
    new TestUser(array('id' => 3))
)));

foreach ($bar->getUsers() as $user) {
	echo $user->getId() . PHP_EOL;
}

$bar = new TestMessage(array('users' => array(
    array('id' => 1),
    array('id' => 2),
    array('id' => 3),
)));

foreach ($bar->getUsers() as $user) {
	echo $user->getId() . PHP_EOL;
}

$u1 = new TestUser(array('id' => 1));
$u2 = new TestUser(array('id' => 2));
$u3 = new TestUser(array('id' => 3));
$users = array($u1, $u2, $u3);

$bar = new TestMessage(array('users' => $users));
foreach ($bar->getUsers() as $user) {
	echo $user->getId() . PHP_EOL;
}

--EXPECT--
1
2
3
1
2
3
1
2
3