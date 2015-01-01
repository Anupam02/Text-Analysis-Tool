import sys
#import matplotlib
#from nltk.draw.dispersion import dispersion_plot
from textstat.textstat import textstat
def main():

    test_data = sys.argv[1]   
    #test_data = """Playing games has always been thought to be important to the development of well-balanced and creative children; however, what part, if any, they should play in the lives of adults has never been researched that deeply. I believe that playing games is every bit as important for adults as for children. Not only is taking time out to play games with our children and other adults valuable to building interpersonal relationships but is also a wonderful way to release built up tension."""
    #print  len(test_data)
    #print textstat.flesch_reading_ease(test_data)
    #print textstat.smog_index(test_data)
    #print textstat.flesch_kincaid_grade(test_data)
    print textstat.coleman_liau_index(test_data)
    #print textstat.automated_readability_index(test_data)
    #print textstat.dale_chall_readability_score(test_data)
    #print textstat.difficult_words(test_data)
    #print textstat.linsear_write_formula(test_data)
    #print textstat.gunning_fog(test_data)
    #print textstat.text_standard(test_data)
    #dispersion_plot(test_data,["to","be","the","of","if"])


if __name__ == '__main__' :
    main()   
