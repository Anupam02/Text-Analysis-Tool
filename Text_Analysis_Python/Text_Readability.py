# -*- coding: utf-8 -*-
"""
Created on Sat Dec 13 16:35:06 2014

@author: anupam
"""

#!/usr/bin/env python

import sys
import readability


def main():
    """Accessing the command line arguments as per constraint"""
    test_data                   = sys.argv[1]       #string to be analysed
    
    rd = readability.Readability(test_data)
    #print 'Test text:'
    #print '"%s"\n' % test_data
    print 'ARI: ', rd.ARI()
    print 'FleschReadingEase: ', rd.FleschReadingEase()
    print 'FleschKincaidGradeLevel: ', rd.FleschKincaidGradeLevel()
    print 'GunningFogIndex: ', rd.GunningFogIndex()
    print 'SMOGIndex: ', rd.SMOGIndex()
    print 'ColemanLiauIndex: ', rd.ColemanLiauIndex()
    print 'LIX: ', rd.LIX()
    print 'RIX: ', rd.RIX()
    

         

if __name__ == '__main__':
    main()