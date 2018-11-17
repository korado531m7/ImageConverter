<?php
namespace korado531m7\ImageConverter;

class BlockIdList{
    const MINECRAFT_BEDROCK_EDITION = [
                                        '625f5d' => [1,0], 
                                        '4e652c' => [2,0], 
                                        'acab48' => [19,0], 
                                        '190e2d' => [49,0], 
                                        'e8e4b0' => [121,0], 
                                        'cfc492' => [24,0], 
                                        '999ba8' => [82,0], 
                                        'a776a6' => [181,1], 
                                        'a0200c' => [152,0], 
                                        '273e89' => [22,0], 
                                        '6bdcdb' => [57,0], 
                                        '65eb8c' => [133,0], 
                                        'dcdad7' => [42,0], 
                                        'fee83f' => [41,0], 
                                        '81c06f' => [165,0], 
                                        '9c8600' => [170,0], 
                                        '66898e' => [168,0], 
                                        '435d53' => [168,1], 
                                        '97aedb' => [174,0], 
                                        '3c240e' => [5,5], 
                                        'ad5e39' => [5,4], 
                                        'a97e5f' => [5,3], 
                                        'cbb781' => [5,2], 
                                        '75573c' => [5,1], 
                                        'a88857' => [5,0], 
                                        '19181b' => [35,15], 
                                        'a9302d' => [35,14], 
                                        '536d1a' => [35,13], 
                                        '734a2e' => [35,12], 
                                        '3d3498' => [35,11], 
                                        '842eb2' => [35,10], 
                                        '18808a' => [35,9], 
                                        '8f8d88' => [35,8], 
                                        '3f4549' => [35,7], 
                                        'd1809a' => [35,6], 
                                        '6caf1e' => [35,5], 
                                        'eabc2b' => [35,4], 
                                        '48b3d8' => [35,3], 
                                        'b947ae' => [35,2], 
                                        'e57418' => [35,1], 
                                        'c3d0d0' => [35,0], 
                                        'c2a495' => [159,0], 
                                        '974d22' => [159,1], 
                                        '8e5167' => [159,2], 
                                        '6d6583' => [159,3], 
                                        'ad7919' => [159,4], 
                                        '616c31' => [159,5], 
                                        '984646' => [159,6], 
                                        '372622' => [159,7], 
                                        '7e665b' => [159,8], 
                                        '4f5355' => [159,9], 
                                        '714253' => [159,10], 
                                        '483758' => [159,11], 
                                        '482f1f' => [159,12], 
                                        '494e28' => [159,13], 
                                        '88362e' => [159,14], 
                                        '231414' => [159,15], 
                                        'c1c8ca' => [236,0], 
                                        'd65601' => [236,1], 
                                        '9e2c95' => [236,2], 
                                        '2381b7' => [236,3], 
                                        'e1a115' => [236,4], 
                                        '599e19' => [236,5], 
                                        'c85e87' => [236,6], 
                                        '33363c' => [236,7], 
                                        '76746d' => [236,8], 
                                        '146f80' => [236,9], 
                                        '5f1c92' => [236,10], 
                                        '2b2b86' => [236,11], 
                                        '58371c' => [236,12], 
                                        '465523' => [236,13], 
                                        '871e20' => [236,14], 
                                        '0b080d' => [236,15]
                                        ];
    const MINECRAFT_JAVA_EDITION = [
                                        '625f5d' => [1,0], 
                                        '4e652c' => [2,0], 
                                        'acab48' => [19,0], 
                                        '190e2d' => [49,0], 
                                        'e8e4b0' => [121,0], 
                                        'cfc492' => [24,0], 
                                        '999ba8' => [82,0], 
                                        'a776a6' => [181,1], 
                                        'a0200c' => [152,0], 
                                        '273e89' => [22,0], 
                                        '6bdcdb' => [57,0], 
                                        '65eb8c' => [133,0], 
                                        'dcdad7' => [42,0], 
                                        'fee83f' => [41,0], 
                                        '81c06f' => [165,0], 
                                        '9c8600' => [170,0], 
                                        '66898e' => [168,0], 
                                        '435d53' => [168,1], 
                                        '97aedb' => [174,0], 
                                        '3c240e' => [5,5], 
                                        'ad5e39' => [5,4], 
                                        'a97e5f' => [5,3], 
                                        'cbb781' => [5,2], 
                                        '75573c' => [5,1], 
                                        'a88857' => [5,0], 
                                        '19181b' => [35,15], 
                                        'a9302d' => [35,14], 
                                        '536d1a' => [35,13], 
                                        '734a2e' => [35,12], 
                                        '3d3498' => [35,11], 
                                        '842eb2' => [35,10], 
                                        '18808a' => [35,9], 
                                        '8f8d88' => [35,8], 
                                        '3f4549' => [35,7], 
                                        'd1809a' => [35,6], 
                                        '6caf1e' => [35,5], 
                                        'eabc2b' => [35,4], 
                                        '48b3d8' => [35,3], 
                                        'b947ae' => [35,2], 
                                        'e57418' => [35,1], 
                                        'c3d0d0' => [35,0], 
                                        'c2a495' => [159,0], 
                                        '974d22' => [159,1], 
                                        '8e5167' => [159,2], 
                                        '6d6583' => [159,3], 
                                        'ad7919' => [159,4], 
                                        '616c31' => [159,5], 
                                        '984646' => [159,6], 
                                        '372622' => [159,7], 
                                        '7e665b' => [159,8], 
                                        '4f5355' => [159,9], 
                                        '714253' => [159,10], 
                                        '483758' => [159,11], 
                                        '482f1f' => [159,12], 
                                        '494e28' => [159,13], 
                                        '88362e' => [159,14], 
                                        '231414' => [159,15], 
                                        'c1c8ca' => [251,0], 
                                        'd65601' => [251,1], 
                                        '9e2c95' => [251,2], 
                                        '2381b7' => [251,3], 
                                        'e1a115' => [251,4], 
                                        '599e19' => [251,5], 
                                        'c85e87' => [251,6], 
                                        '33363c' => [251,7], 
                                        '76746d' => [251,8], 
                                        '146f80' => [251,9], 
                                        '5f1c92' => [251,10], 
                                        '2b2b86' => [251,11], 
                                        '58371c' => [251,12], 
                                        '465523' => [251,13], 
                                        '871e20' => [251,14], 
                                        '0b080d' => [251,15]
                                    ];
                                    
    public static function getBedrockBlockId(){
        return self::MINECRAFT_BEDROCK_EDITION;
    }
    
    public static function getJavaBlockId(){
        return self::MINECRAFT_JAVA_EDITION;
    }
}